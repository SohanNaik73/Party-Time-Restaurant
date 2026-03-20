 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'db.php'; ?>
<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check staff credentials (you can store them in a staff table)
    $res = mysqli_query($conn, "SELECT * FROM staff WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['staff_logged_in'] = true;
        header("Location: admin.php");
    } else {
        $error = "Invalid login details!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Staff Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <link rel="stylesheet" href="style.css">
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
             <a class="navbar-brand d-flex align-items-center" href="index.php">
    <img src="PartyTime_logo.png" alt="PartyTime Logo" height="80">
    <span class="ms-2 fw-bold text-white">PartyTime</span>
</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#restaurantNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="restaurantNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="booking.php">Book Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-warning" href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark">
          <h4 class="mb-0">Staff Login</h4>
        </div>
        <div class="card-body">
          <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
          <form method="POST">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-warning w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>