<?php include "../../templates/header.php";?>

<?php
// PROTEKSI HALAMAN (Hanya Super User)
if((isset($_SESSION['Cabang']) && $_SESSION['Cabang'] == 'semua') && (isset($_SESSION['Level']) && ($_SESSION['Level'] == 'developer' || $_SESSION['Level'] == 'pemilik' || $_SESSION['Level'] == 'admin'))){
    // Access Granted
} else { 
    header("location: ../monitoring/index.php"); 
    exit();
}

// Configuration --------------------------
$ThisURL = "manajemen-user-form.php"; // Sesuaikan nama file ini
$RedirectURL = "manajemen-user.php"; // Balik ke list user
$table = "users";

$IndexPage = isset($_GET['page']) ? "?page=" . $_GET['page'] : null;
$IndexSearch = isset($_GET['search']) ? "&search=" .  $_GET['search'] : null;
$IndexFilter = isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : null;
$IndexSort = isset($_GET['sort']) ? "&sort=" . $_GET['sort'] . "&by=" . $_GET['by'] : null;

// Catatan: Fungsi generateSKU dihapus karena Username biasanya manual.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $add = htmlspecialchars($_POST['Add']);
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    // Configuration --------------------------
    // Ambil data dari form
    $username = htmlspecialchars($_POST['Username']);
    $password = $_POST['Password']; // Text biasa sesuai request
    $cabangInput = htmlspecialchars($_POST['Cabang']); // Text biasa
    $level = htmlspecialchars($_POST['Level']);

    if($add == "Add")
    {
        // Cek dulu apakah username sudah ada biar ga duplikat
        $cekUser = mysqli_query($conn, "SELECT Username FROM $table WHERE Username = '$username'");
        if(mysqli_num_rows($cekUser) > 0){
             echo "<script>alert('Username sudah terdaftar!'); window.history.back();</script>";
             exit();
        }

        $query = "INSERT INTO $table (Username, Password, Cabang, Level) 
                  VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $username, $password, $cabangInput, $level);

        if ($stmt->execute()) {
            echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . "';</script>";
            exit();
        } else {
            echo "Gagal menambahkan data: " . $conn->error;
        }
        $stmt->close();
    }

    else if(isset($_GET['editing']))
    {
        // LOGIKA EDIT: 
        // Admin Pusat boleh edit Username, Password, Cabang, dan Level user manapun.
        
        $query = "UPDATE $table SET Username=?, Password=?, Cabang=?, Level=? 
                  WHERE ID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssi", $username, $password, $cabangInput, $level, $id);

        if ($stmt->execute()) {
            echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . "';</script>";
            exit();
        } else {
            echo "Gagal mengedit data: " . $stmt->error;
        } 
        $stmt->close();
    }
}
else {
    $title = null;

    // Configure your Datas here ---------------------------
    $dataUsername = null;
    $dataPassword = null;
    $dataCabang = null;
    $dataLevel = null;

    if(isset($_GET['add']))
    {
        $title = "Add";
    }
    else if(isset($_GET['edit'])&&isset($_GET['id']))
    {
        $title = "Edit";
        $id = $_GET['id'];

        // Proteksi Edit: Ambil data
        $database = mysqli_query($conn, "SELECT * FROM $table WHERE ID = '$id'");
        $datas = $database->fetch_assoc();

        if(!$datas) {
            echo "<script>alert('Data tidak ditemukan!'); window.location.href='$RedirectURL';</script>";
            exit;
        }

        // Configure your Datas here ---------------------------
        $dataUsername = $datas['Username'];
        $dataPassword = $datas['Password'];
        $dataCabang = $datas['Cabang'];
        $dataLevel = $datas['Level'];
    }
    else if(isset($_GET['delete']) && isset($_GET['id']))
    {
        $id = $_GET['id'];
        
        // Sedikit proteksi biar ga hapus diri sendiri (opsional tapi bagus)
        // if($id == $_SESSION['ID']) { ... } 
        
        $query = mysqli_query($conn, "DELETE FROM $table WHERE ID = '$id'");
        echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . "';</script>";
    }
?>

<div class="developer-original-form-add">
    <h1><?= $title ?> Data User</h1><br>
    <form action="<?= $title == 'Edit' ? $ThisURL . $IndexPage . $IndexSearch . $IndexSort . "&editing&id=" . $id : $ThisURL . $IndexPage . $IndexSearch . $IndexSort ?>" method="post">
        <div class="developer-original-content">
            <div>
                <span>Username</span>
                <span>Password</span>
                <span>Cabang</span>
                <span>Level</span>
            </div>
            <div>
                <span>:</span>
                <span>:</span>
                <span>:</span>
                <span>:</span>
            </div>
            <div>
                <input type="hidden" name="Add" value="<?= $title == 'Edit' ? '' : 'Add' ?>" required>
                
                <input type="text" placeholder="Username (Login)" name="Username" value="<?= $title == 'Edit' ? $dataUsername : '' ?>" required>
                
                <input type="text" placeholder="Password" name="Password" value="<?= $title == 'Edit' ? $dataPassword : '' ?>" required>
                
                <select name="Cabang" required>
                    <option value="">Pilih Cabang</option>
                    <option value="semua" <?= ($dataCabang == 'semua') ? 'selected' : '' ?>>Semua (Akses Pusat)</option>
                    
                    <?php
                    $queryCabang = mysqli_query($conn, "SELECT Cabang FROM cabang ORDER BY Cabang ASC");
                    while($rowCabang = mysqli_fetch_assoc($queryCabang)) {
                        if(strtolower($rowCabang['Cabang']) == 'semua') continue;

                        $namaCabang = $rowCabang['Cabang'];
                        $selected = ($dataCabang == $namaCabang) ? 'selected' : '';
                        
                        echo "<option value='$namaCabang' $selected>$namaCabang</option>";
                    }
                    ?>
                </select>
                
                <select name="Level" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="">Pilih Level</option>
                    <option value="pemilik" <?= ($title == 'Edit' && $dataLevel == 'pemilik') ? 'selected' : '' ?>>Pemilik</option>
                    <option value="admin" <?= ($title == 'Edit' && $dataLevel == 'admin') ? 'selected' : '' ?>>Admin</option>
                    <option value="pengguna" <?= ($title == 'Edit' && $dataLevel == 'pengguna') ? 'selected' : '' ?>>Pengguna</option>
                </select>
            </div>
        </div>

        <div class="decision">
            <div>
                <a href="<?= $RedirectURL . $IndexPage . $IndexSearch . $IndexSort ?>">Kembali</a>      
                <input type="submit" value="<?= $title ?>"></input>
            </div>
        </div>
    </form>
</div>

<div class="developer-original-blackbarrier hidden"></div>
<script src = "../javascript/pagination.js"></script>

<?php } ?>

<?php include "../../templates/footer.php";?>