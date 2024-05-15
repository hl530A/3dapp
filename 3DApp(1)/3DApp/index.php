<!doctype html >
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/styles/index.css" rel="stylesheet"/>


</head>
<body>
<div class="container">
    <header class="navbar-light header-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.php">
                    Coca-cola
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
                    <span class="d-none d-sm-inline-block small">Menu</span>
                </button>

                <!-- Responsive category toggler -->
                <button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarCategoryCollapse"
                        aria-controls="navbarCategoryCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span
                            class="d-none d-sm-inline-block small">Category</span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll me-auto">

                        <!-- Nav item Listing -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="index.php" id="listingMenu"
                               aria-haspopup="true" aria-expanded="false">Brands</a>

                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link " href="about.php" id="listingMenu"
                               aria-haspopup="true" aria-expanded="false">About us</a>

                        </li>-->

                    </ul>
                </div>


            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Our Best Products</h2>
                </div>
            </div>

            <div class="row g-4">
                <?php
                // connect to the database
                // connect to the database
                $dsn = "sqlite:db.sqlite";
                $dbh = new PDO($dsn);

                // fetch data from the modeldata
                $stmt = $dbh->query("SELECT * FROM product");
                $data = array();
                $i = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    // Insert Dat
                    if (!isset($data[$row['id']])) {
                        echo '<div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Card Image -->
                            <img src="assets/' . $row['id'] . '.png" class="card-img" alt="">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column z-index-1 p-4">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between">
                                    <span class="badge text-bg-dark">' . $row['category'] . '</span>
                                    <span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>' . $row['star'] . '</span>
                                </div>

                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="detail.php?id=' . $row['id'] . '" class="stretched-link">' . $row['name'] . '</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>';
                    }
                }
                ?>
            </div> <!-- Row END -->
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
