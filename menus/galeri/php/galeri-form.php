<?php include "../../templates/header.php";?>

<?php
// Configuration --------------------------
$ThisURL = "galeri-form.php";
$RedirectURL = "galeri.php";
$ImageURL = "../../../database/image/";
$table = "galeri";

$IndexPage = isset($_GET['page']) ? "?page=" . $_GET['page'] : null;
$IndexSearch = isset($_GET['search']) ? "&search=" .  $_GET['search'] : null;
$IndexFilter = isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : null;
$IndexSort = isset($_GET['sort']) ? "&sort=" . $_GET['sort'] . "&by=" . $_GET['by'] : null;
$IndexDateSearch = isset($_GET['past']) ? "&past=" . $_GET['past'] . "&present=" . $_GET['present'] : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $add = htmlspecialchars($_POST['Add']);
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    // Configuration --------------------------
    $judul = htmlspecialchars($_POST['Judul']);

    // Hapus block If ini jika tidak memiliki gambar -------------------------------------
    if (isset($_FILES['Jalur']) && $_FILES['Jalur']['error'] == 0) {
        $targetDir = $ImageURL;
        $fileName = basename($_FILES["Jalur"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = ['jpg', 'jpeg', 'png'];
        if (!in_array($imageFileType, $allowedTypes)) {
            die("Format gambar tidak valid. Hanya JPG, JPEG, dan PNG diperbolehkan.");
        }

        if (move_uploaded_file($_FILES["Jalur"]["tmp_name"], $targetFilePath)) {
            $jalurImage = $targetFilePath;
        } else {
            die("Gagal mengunggah gambar.");
        }
    } else {
        if(isset($_GET['editing']))
        {
            // Perhatikan kode di bawah ini. Kode ini adalah untuk tetap mempertahankan gambar ketika edit meski user tidak memilih gambar lagi. Sebelumnya, jika user tidak memilih gambar ketika edit, maka gambar yang lama akan hilang.
            if(str_contains($_POST['JalurEdit'], "/")){ $jalurImage = $_POST['JalurEdit']; }
            else { $jalurImage = "No profile Image!"; }
        }
        else{ $jalurImage = "No profile Image!"; }
    }
    // End If

    if($add == "Add")
    {
        $query = "INSERT INTO $table (
        Judul,
        Jalur)
        VALUES (?, ?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $judul, $jalurImage);

        if ($stmt->execute()) {
            echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "';</script>";
            exit();
        } else {
            echo "Gagal menambahkan data: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }

    else if(isset($_GET['editing']))
    {
        $query = "UPDATE $table SET
        Judul = ?,
        Jalur = ?
        WHERE ID = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssi", $judul, $jalurImage, $id); 

        if ($stmt->execute()) {
            echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "';</script>";
            exit();
        } else {
            echo "Gagal mengedit data: " . $stmt->error;
        } 

        $stmt->close();
        $conn->close();
    }
}
else {
    $title = null;

    // Configure your Datas here ---------------------------
    $dataJudul = null;
    $dataJalur = null;

    if(isset($_GET['add']))
    {
        $title = "Add";
    }
    else if(isset($_GET['edit'])&&isset($_GET['id']))
    {
        $title = "Edit";
        $id = $_GET['id'];

        $database = mysqli_query($conn, "SELECT * FROM $table WHERE ID = '$id'");
        $datas = $database->fetch_assoc();

        // Configure your Datas here ---------------------------
        $dataJudul = $datas['Judul'];
        $dataJalur = $datas['Jalur'];
    }
    else if(isset($_GET['delete']) && isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = mysqli_query($conn, "DELETE FROM $table WHERE ID = '$id'");
        echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "';</script>";
    }
?>

<div class="developer-original-form-add">
    <h1><?= $title ?> Data</h1><br>
    <form action="<?= $title == 'Edit' ? $ThisURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "&editing&id=" . $id : $ThisURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch ?>" method="post" enctype="multipart/form-data">
        <div class="developer-original-content">
            <div>
                <span>Judul</span>
                <span>Jalur</span>
            </div>
            <div>
                <span>:</span>
                <span>:</span>
            </div>
            <div>
                <input type="hidden" name="Add" value="<?= $title == 'Edit' ? '' : 'Add' ?>" required>
                <input type="text" placeholder="Judul" name="Judul" value="<?= $title == 'Edit' ? $dataJudul : '' ?>" required>
                <span class="image">
                    <input type="button" value="Select Image" class="SelectImageForm" required>
                    <input type="file" name="Jalur">
                    <input type="button" value="Show Image" class="ShowImageForm" required>
                    <input type="hidden" name="JalurEdit" value="<?= $title == 'Edit' ? $dataJalur : '' ?>">
                </span>
            </div>
        </div>

        <div class="decision">
            <div>
                <a href="<?= $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch ?>">Kembali</a>     
                <input type="submit" value="<?= $title ?>"></input>
            </div>
        </div>
    </form>
</div>

<div class="developer-original-blackbarrier hidden"></div>

<div class="developer-original-modal-confirm hidden">
    <p>Pastikan format gambar adalah JPG, JPEG, atau PNG</p>
    <button>Oke</button>
</div>

<div class="developer-original-modal-confirm-02 hidden">
    <p>Harap untuk memilih gambar terlebih dahulu.</p>
    <button>Oke</button>
</div>

<div class="developer-original-modal-image hidden">
    <img src="<?= $title == 'Edit' ? $dataJalur : '' ?>">
</div>

<div class="developer-original-modal-no-image hidden">
    <p>Data tidak memiliki gambar</p>
    <button>Oke😢</button>
</div>

</div>

<script src = "../javascript/pagination.js"></script>

<?php } ?>

<?php include "../../templates/footer.php";?>