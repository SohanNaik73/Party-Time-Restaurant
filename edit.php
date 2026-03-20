<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM bookingtable WHERE id=$id");
$row = mysqli_fetch_assoc($res);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['booking_date'];
    $guests = $_POST['guests'];

    mysqli_query($conn, "UPDATE bookingtable 
                         SET name='$name', email='$email', booking_date='$date', guests='$guests' 
                         WHERE id=$id");
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Reservation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="PartyTime_logo.png" alt="PartyTime Logo" height="60">
      <span class="ms-2 fw-bold text-white">PartyTime</span>
    </a>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Edit Reservation #<?php echo $row['id']; ?></h4>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Booking Date</label>
          <input type="date" name="booking_date" value="<?php echo $row['booking_date']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Guests</label>
          <input type="number" name="guests" value="<?php echo $row['guests']; ?>" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
          <a href="admin.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" name="update" class="btn btn-success">Update Reservation</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>