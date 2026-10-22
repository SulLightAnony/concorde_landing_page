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
$ThisURL = "cabang-form.php"; 
$RedirectURL = "cabang.php"; 
$table = "cabang"; 

$IndexPage = isset($_GET['page']) ? "?page=" . $_GET['page'] : null;
$IndexSearch = isset($_GET['search']) ? "&search=" .  $_GET['search'] : null;
$IndexFilter = isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : null;
$IndexSort = isset($_GET['sort']) ? "&sort=" . $_GET['sort'] . "&by=" . $_GET['by'] : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $add = htmlspecialchars($_POST['Add']);
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    // Ambil data dari form
    $kepalaCabang = htmlspecialchars($_POST['Kepala']);
    $alamatCabang = htmlspecialchars($_POST['Alamat']);

    if($add == "Add")
    {
        $namaCabang = htmlspecialchars($_POST['Cabang']); // Hanya diambil saat ADD
        
        // Cek Duplikat
        $cek = mysqli_query($conn, "SELECT ID FROM $table WHERE Cabang = '$namaCabang'");
        if(mysqli_num_rows($cek) > 0){
             echo "<script>alert('Nama Cabang sudah ada!'); window.history.back();</script>";
             exit();
        }

        $query = "INSERT INTO $table (Cabang, Kepala, Alamat) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $namaCabang, $kepalaCabang, $alamatCabang);

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
        // LOGIKA EDIT: Kolom 'Cabang' DIBUANG dari SQL agar permanen
        $query = "UPDATE $table SET Kepala=?, Alamat=? WHERE ID = ?";
        $stmt = $conn->prepare($query);
        // Tipe: ssi (Kepala: string, Alamat: string, ID: int)
        $stmt->bind_param("ssi", $kepalaCabang, $alamatCabang, $id);

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
    $dataCabang = null;
    $dataKepala = null;
    $dataAlamat = null;

    if(isset($_GET['add'])) { $title = "Add"; }
    else if(isset($_GET['edit'])&&isset($_GET['id']))
    {
        $title = "Edit";
        $id = $_GET['id'];
        $database = mysqli_query($conn, "SELECT * FROM $table WHERE ID = '$id'");
        $datas = $database->fetch_assoc();

        if(!$datas) { echo "<script>alert('Data tidak ditemukan!'); window.location.href='$RedirectURL';</script>"; exit; }

        $dataCabang = $datas['Cabang'];
        $dataKepala = $datas['Kepala'];
        $dataAlamat = $datas['Alamat'];
    }
    else if(isset($_GET['delete']) && isset($_GET['id']))
    {
        $id = $_GET['id'];

        // 1. PROTEKSI AKUN MASTER (Cegah hapus cabang 'semua')
        // Ambil data cabang yang mau dihapus untuk dicek namanya
        $cekMaster = mysqli_query($conn, "SELECT Cabang FROM $table WHERE ID = '$id'");
        $dataMaster = mysqli_fetch_assoc($cekMaster);

        if ($dataMaster) {
            // Jika ID nya 0 ATAU namanya adalah 'semua', TOLAK penghapusan
            if ($id == 0 || strtolower($dataMaster['Cabang']) == 'semua') {
                echo "<script>alert('Peringatan: Cabang Utama (semua) adalah entitas sistem dan TIDAK BOLEH dihapus!'); window.history.back();</script>";
                exit;
            }
        }

        // 2. CEK RELASI (Apakah cabang sedang dipakai user lain?)
        $cekPakai = mysqli_query($conn, "SELECT 1 FROM users WHERE Cabang = (SELECT Cabang FROM cabang WHERE ID='$id')");
        if(mysqli_num_rows($cekPakai) > 0) { 
            echo "<script>alert('Cabang sedang digunakan oleh pengguna! Hapus atau pindahkan pengguna terlebih dahulu.'); window.history.back();</script>"; 
            exit; 
        }

        // 3. EKSEKUSI DELETE (Jika lolos semua proteksi)
        $query = mysqli_query($conn, "DELETE FROM $table WHERE ID = '$id'");
        echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . "';</script>";
    }
?>

<div class="developer-original-form-add">
    <h1><?= $title ?> Data Cabang</h1><br>
    <form action="<?= $title == 'Edit' ? $ThisURL . $IndexPage . $IndexSearch . $IndexSort . "&editing&id=" . $id : $ThisURL . $IndexPage . $IndexSearch . $IndexSort ?>" method="post">
        <div class="developer-original-content">
            <div>
                <span>Nama Cabang</span>
                <span>Kepala Cabang</span>
                <span>Alamat Lengkap</span>
            </div>
            <div>
                <span>:</span>
                <span>:</span>
                <span>:</span>
            </div>
            <div>
                <input type="hidden" name="Add" value="<?= $title == 'Edit' ? '' : 'Add' ?>" required>
                
                <input type="text" placeholder="Nama Cabang tidak boleh sama dengan yang sudah ada" name="Cabang" value="<?= $dataCabang ?>" <?= $title == 'Edit' ? 'readonly style="background-color: #e9ecef; cursor: not-allowed;"' : 'required' ?>>
                
                <input type="text" placeholder="Nama Kepala Cabang" name="Kepala" value="<?= $dataKepala ?>" required>
                
                <input type="text" placeholder="Alamat Lengkap Cabang" name="Alamat" value="<?= $dataAlamat ?>" required>
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