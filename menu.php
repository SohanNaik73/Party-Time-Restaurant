<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Party Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
       <a class="navbar-brand d-flex align-items-center" href="index.php">
    <img src="PartyTime_logo.png" alt="PartyTime Logo" height="80">
    <span class="ms-2 fw-bold text-white">PartyTime</span>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="booking.php">Book Table</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-warning px-4" href="admin.php">Staff Login</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container my-5">
        <h2 class="text-center mb-4">Our Delicious Menu</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0" class="card-img-top" alt="Biryani">
                    <div class="card-body text-center">
                        <h5 class="card-title">Goan Fish Biryani</h5>
                        <p class="text-muted">Authentic spiced rice with fresh catch.</p>
                        <h6 class="text-warning">₹350</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://flavorquotient.com/wp-content/uploads/2024/11/Chicken-Xacuti-FQ-3-5145.jpg" class="card-img-top" alt="xacuti">
                    <div class="card-body text-center">
                        <h5 class="card-title">Chicken Xacuti</h5>
                        <p class="text-muted">Traditional Goan coconut-based curry.</p>
                        <h6 class="text-warning">₹280</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://india1948.com/cdn/shop/files/Papaya_Chaat_3_1000x.jpg?v=1720026946"  class="card-img-top" alt="salad">
                    <div class="card-body text-center">
                        <h5 class="card-title">Garden Salad</h5>
                        <p class="text-muted">Fresh local greens with lemon dressing.</p>
                        <h6 class="text-warning">₹150</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>