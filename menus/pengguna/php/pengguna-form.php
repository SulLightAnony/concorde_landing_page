<?php include "../../templates/header.php";?>

<?php
// Configuration --------------------------
$ThisURL = "pengguna-form.php";
$RedirectURL = "pengguna.php";
$ImageURL = "image/";
$table = "users";

$IndexPage = isset($_GET['page']) ? "?page=" . $_GET['page'] : null;
$IndexSearch = isset($_GET['search']) ? "&search=" .  $_GET['search'] : null;
$IndexFilter = isset($_GET['filter']) ? "&filter=" . $_GET['filter'] : null;
$IndexSort = isset($_GET['sort']) ? "&sort=" . $_GET['sort'] . "&by=" . $_GET['by'] : null;
$IndexDateSearch = isset($_GET['past']) ? "&past=" . $_GET['past'] . "&present=" . $_GET['present'] : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $add = htmlspecialchars($_POST['Add']);
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    // Configuration --------------------------
    $username = htmlspecialchars($_POST['Username']);
    $password = htmlspecialchars($_POST['Password']);
    $level = htmlspecialchars($_POST['Level']);

    if($add == "Add")
    {
        $query = "INSERT INTO $table (
        Username,
        Password,
        Level)
        VALUES (?, ?, ?x)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $password, $level);

        if ($stmt->execute()) {
            echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "';</script>";
            exit();
        } else {
            echo "Gagal menambahkan user: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }

    else if(isset($_GET['editing']))
    {
        $query = "UPDATE $table SET
        Username = ?,
        Password = ?,
        Level = ? 
        WHERE ID = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssi", $username, $password, $level, $id); 

        if ($stmt->execute()) {
            echo "<script>window.location.href = '" . $RedirectURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "';</script>";
            exit();
        } else {
            echo "Gagal mengedit user: " . $stmt->error;
        } 

        $stmt->close();
        $conn->close();
    }
}
else {
    $title = null;

    // Configure your Datas here ---------------------------
    $dataUsername = null;
    $dataPassword = null;
    $dataLevel = null;

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
        $dataUsername = $datas['Username'];
        $dataPassword = $datas['Password'];
        $dataLevel = $datas['Level'];
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
    <form action="<?= $title == 'Edit' ? $ThisURL . $IndexPage . $IndexSearch . $IndexSort . $IndexFilter . $IndexDateSearch . "&editing&id=" . $id : $ThisURL ?>" method="post" enctype="multipart/form-data">
        <div class="developer-original-content">
            <div>
                <span>Username</span>
                <span>Password</span>
                <span>Level</span>
            </div>
            <div>
                <span>:</span>
                <span>:</span>
                <span>:</span>
            </div>
            <div>
                <input type="hidden" name="Add" value="<?= $title == 'Edit' ? '' : 'Add' ?>" required>
                <input type="text" placeholder="Username" name="Username" value="<?= $title == 'Edit' ? $dataUsername : '' ?>" required>
                <input type="text" placeholder="Password" name="Password" value="<?= $title == 'Edit' ? $dataPassword : '' ?>" required>
                <select name="Level">
                    <!-- Configure your select value -->
                    <option value="<?= $selectvalue = 'Admin' ?>" <?= $title == 'Edit' && $dataLevel == $selectvalue ? 'selected' : '' ?>><?= $selectvalue ?></option>
                </select>
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
    <img src="<?= $title == 'Edit' ? $dataProfilePicture : '' ?>">
</div>

<div class="developer-original-modal-no-image hidden">
    <p>Data tidak memiliki gambar</p>
    <button>Oke😢</button>
</div>

</div>

<script src = "../javascript/pagination.js"></script>

<?php } ?>

<?php include "../../templates/footer.php";?>