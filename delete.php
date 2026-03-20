<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM bookingtable WHERE id=$id");
header("Location: admin.php");
?>