<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../Assets/style.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <title>Find Courses</title>

    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("../../Assets/bg.jpg");
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(3.3px);
            -webkit-backdrop-filter: blur(3.3px);
            border: 1px solid rgba(255, 255, 255, 0.07);
        }

        #our_team {
            background-color: #190960;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../../Assets/nc_finder_logo_transparent.png" alt="avatar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto justify-content-end  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="color: #190960" class="nav-link fw-bold" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #190960" class="nav-link fw-bold" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #190960" class="nav-link fw-bold" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #190960" class="nav-link fw-bold" href="about_us.php">About Us</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-end p-2">
                    <div class="dropdown">
                        <a class="btn btn-light d-flex align-items-center rounded-circle p-0 border-0" href="#"
                           role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false"
                           style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-user-tie text-secondary m-auto"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="userMenu">
                            <li><a class="dropdown-item" href="#"><i class="fa fa-user me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-cog me-2"></i>Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-sign-out-alt me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5">
    <h2 class="text-center fw-bold text-light mb-4">Find Courses</h2>

    <div class="d-flex justify-content-center mb-4">
        <input type="text" class="form-control w-50 rounded-pill px-4" placeholder="Search courses...">
    </div>

    <div class="bg-primary text-white text-center py-2 rounded mb-3">
        <h4 class="m-0">Courses</h4>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 text-white">
                <img src="../../Assets/sample-course.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Bookkeeping NC III</h5>
                    <p class="card-text">TESDA Accredited • Free Tuition</p>
                    <a href="#" class="btn btn-outline-light btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 text-white">
                <img src="../../Assets/sample-course.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Programming NC IV</h5>
                    <p class="card-text">Hands-on Training • Online & On-site</p>
                    <a href="#" class="btn btn-outline-light btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <!-- Add more cards here -->
    </div>
</main>

</body>
</html>
