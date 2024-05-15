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
    <script src="http://www.x3dom.org/download/x3dom.js"></script>
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
    <main>

        <!-- =======================
        Main Banner START -->
        <section class="pt-4 pt-lg-5">
            <div class="container position-relative">

                <!-- Title and button START -->
                <?php
                $id = $_GET['id'];

                $dsn = "sqlite:db.sqlite";
                $dbh = new PDO($dsn);

                // Fetch data from the modeldata
                $stmt = $dbh->query("SELECT * FROM product WHERE id=" . $id);
                $product = $stmt->fetch();

                echo '<div class="row">
        <div class="col-12">

            <!-- Meta -->
            <div class="d-md-flex justify-content-md-between">
                <!-- Title -->
                <div>
                    <h1 class="fs-2">' . $product['name'] . '</h1>
                    <ul class="nav nav-divider h6 text-body mb-0">
                        <li class="nav-item">' . $product['category'] . '</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>';
                ?> <!-- Title and button END -->

                <!-- Image gallery START -->
                <div class="row mt-md-5 gap-4">
                    <div class="col-12 " style="background:#fff">
                        <?php

                        $id = $_GET['id'];

                        $dsn = "sqlite:db.sqlite";
                        $dbh = new PDO($dsn);

                        // Fetch data from the modeldata
                        $stmt = $dbh->query("SELECT * FROM product WHERE id=" . $id);
                        $product = $stmt->fetch();

                        echo "<x3d class='wire' style='display: none;' height='500px' width='100%'>
                                <scene id='modelDisplayScene'>
                                    <inline  nameSpaceName='Model" . $product['id'] . "Space' mapDEFToID='true' url='models/" . $id . "/index.x3d'>
                                    </inline>
                                </scene>
                            </x3d>"

                        ?>

                    </div>
                    <?php

                    $id = $_GET['id'];

                    $dsn = "sqlite:db.sqlite";
                    $dbh = new PDO($dsn);

                    // Fetch data from the modeldata
                    $stmt = $dbh->query("SELECT * FROM product WHERE id=" . $id);
                    $product = $stmt->fetch();

                    echo '
                    <div class="col-2" style="background:#fff">
                    <img src="assets/gallery/' . $id . '/1.png">
                    </div>
                     <div class="col-2" style="background:#fff">
                    <img src="assets/gallery/' . $id . '/2.png">
                    </div>
                     <div class="col-2" style="background:#fff">
                    <img src="assets/gallery/' . $id . '/3.png">
                    </div>
                     <div class="col-2" style="background:#fff">
                    <img src="assets/gallery/' . $id . '/4.png">
                    </div>
                    '
                    ?>

                </div>
                <!-- Image gallery END -->

            </div>
            <div class="container">
                <div class="w-150px">

                </div>
            </div>
        </section>
        <!-- =======================
        Main Banner END -->
        <section class="py-0">
            <div class="container">

                <!-- Tabs START -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h6>Camera</h6>
                        <div>
                            <div class="btn-group" role="group" aria-label="Basic example" id="directionBtnGroup">
                                <button type="button" class="btn btn-outline-primary">Front</button>
                                <button type="button" class="btn btn-outline-primary">Back</button>
                                <button type="button" class="btn btn-outline-primary">Left</button>
                                <button type="button" class="btn btn-outline-primary">Right</button>
                                <button type="button" class="btn btn-outline-primary">Top</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <h6>Texture</h6>
                        <div>
                            <div class="btn-group " role="group" aria-label="Basic example" id="textureBtnGroup">
                                <button type="button" class="btn btn-outline-primary" data-texture="a">Texture A
                                </button>
                                <button type="button" class="btn btn-outline-primary" data-texture="b">Texture B
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6>Lighting</h6>
                        <div>
                            <div class="btn-group " role="group" aria-label="Basic example" id="themeBtnGroup">
                                <button type="button" class="btn btn-outline-primary">Dark</button>
                                <button type="button" class="btn btn-outline-primary">Light</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabs END -->
            </div>
        </section>


        <!-- =======================
        Tabs-content START -->
        <section class="pt-4 pt-md-5">
            <div class="container">

                <div class="row g-4 g-md-5">
                    <!-- Tabs Content START -->
                    <div class="col-xl-8">
                        <!-- Outer tabs contents START -->
                        <div class="tab-content mb-0" id="tour-pills-tabContent">

                            <!-- Content item START -->
                            <?php
                            $id = $_GET['id'];
                            $dsn = "sqlite:db.sqlite";
                            $dbh = new PDO($dsn);
                            // Fetch data from the modeldata
                            $stmt = $dbh->query("SELECT * FROM product WHERE id=" . $id);
                            $product = $stmt->fetch();
                            echo '<div class="tab-pane fade show active" id="tour-pills-tab1" role="tabpanel"
                                 aria-labelledby="tour-pills-tab-1">
                                <div class="card bg-transparent p-0">
                                    <!-- Card header -->
                                    <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                        <h3 class="mb-0">Overview</h3>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body p-0 pt-3">
                                        <p class="mb-4">' . $product['desc'] . '</p>
                                        <!-- List -->
                                        <h5>Introduction</h5>
                                        <ul class="list-group list-group-borderless mb-4">
                                            <li class="list-group-item h6 fw-light d-flex mb-0">' . $product['intro'] . '</li>
                                        </ul>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                            </div>'
                            ?>
                            <!-- Content item END -->
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Tabs-content END -->

    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>
    const id =<?php echo $id; ?>;
    const modelIdName = `Model${id}Space`;
    document.getElementById('directionBtnGroup').addEventListener('click', (e) => {
        if (e.target.tagName === 'BUTTON') {
            document.getElementById(`${modelIdName}__` + `CA_CA_${e.target.innerText}Camera`).setAttribute('set_bind', 'true')
        }
    });

    document.getElementById('textureBtnGroup').addEventListener('click', (e) => {
        if (e.target.tagName === 'BUTTON') {

            document.getElementById(`${modelIdName}__` + `texture`).url = e.target.getAttribute('data-texture') + '.png';
        }
    });

    document.getElementById('themeBtnGroup').addEventListener('click', (e) => {
        if (e.target.tagName === 'BUTTON') {
            document.getElementById(`${modelIdName}__` + `ModelHeadLight`).setAttribute('headlight', e.target.innerText === 'Light')
        }
    });


</script>
</body>
</html>
