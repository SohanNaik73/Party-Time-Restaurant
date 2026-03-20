<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Party Time Restaurant</title>
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

    <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="https://images7.alphacoders.com/449/thumb-1920-449798.jpg" class="d-block w-100" alt="Special Drink">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-3 fw-bold">Welcome to Party Time</h1>
                    <p class="lead">The best authentic Goan cuisine in Verna.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/074/419/619/small/traditional-indian-fish-curry-meal-with-rice-and-side-dishes-photo.jpg" class="d-block w-100" alt="Delicious Food">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-3 fw-bold">Taste the Excellence</h1>
                    <p class="lead">Chef-crafted meals using fresh local ingredients.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="https://media-cdn.tripadvisor.com/media/photo-m/1280/18/51/3c/e0/photo0jpg.jpg" class="d-block w-100" alt="Fine Dining">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-3 fw-bold">Perfect for Events</h1>
                    <p class="lead">Book our venue for your special celebrations.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Why Dine With Us?</h2>
                <p class="text-muted">At Party Time, we combine traditional recipes with a modern atmosphere. Whether you're looking for a quick lunch or a celebratory dinner, our menu offers a wide variety of flavors that will keep you coming back for more.</p>
                <a href="menu.php" class="btn btn-dark btn-lg mt-3">View Full Menu</a>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="text-warning">Party Time</h5>
                    <p>Experience authentic dining in the heart of Goa.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li><a href="booking.php" class="text-white-50 text-decoration-none">Book Table</a></li>
                        <li><a href="contact.php" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Opening Hours</h5>
                    <p class="text-white-50">Mon - Sun: 11:00 AM - 11:00 PM</p>
                </div>
            </div>
            <hr class="bg-secondary">
            <p class="text-center text-white-50">© 2026 Party Time Restaurant. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>