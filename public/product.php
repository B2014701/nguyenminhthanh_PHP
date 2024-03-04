<?php
require '../app/Models/jorden1.php';
require_once __DIR__ . '/../bootstrap.php';

use App\Models\Jordan1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản phẩm</title>
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/fitness-bodybuiding/100/sneakernike-1024.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/main.css">
    <style>
        .zoom {
            /* padding: 50px; */
            /* background-color: green; */
            transition: transform .2s;
            /* Animation */
            /* width: 200px; */
            /* height: 200px; */
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(0.9);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include('../partials/navbar.php') ?>
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Converse</h1>
                </div>
            </div>
            <div class="row">
                <div class="container mb-3">
                    <div class="col-12">
                        <a href="index.php" style="text-decoration: none" class="text-dark font-weight-bold">Trang chủ</a>
                        >>
                        <a class="text-dark" href="product.php" style="text-decoration: none"></a>Converse
                    </div>
                </div>

                <div class="dropdown-divider bg-secondary mb-4"></div>
                <div class="row">
                    <?php
                    try {
                        $Jordan1s = new Jordan1($PDO);
                        $Jordan1s = $Jordan1s->all();
                    } catch (PDOException $e) {
                        include('../partials/error.php');
                        die();
                    }
                    include('../partials/list_product.php');
                    echo "<nav aria-label= 'Page navigation example'>
                                <ul class='pagination d-flex justify-content-center'>";
                    //privious
                    if ($page == 1) {
                        echo "  <li class='page-item disabled'>
                                    <a class='page-link' href='' aria-label='Previous'>
                                         <span aria-hidden='true'>&laquo;</span>
                                    </a>
                                </li>";
                    } else echo "  <li class='page-item'>
                                        <a class='page-link' href='product.php?page=" . ($page - 1) . "' aria-label='Previous'>
                                            <span aria-hidden='true'>&laquo;</span>
                                        </a>
                                    </li>";

                    for ($i = 1; $i <= $NoP; $i++) {
                        if ($i == $page) {
                            echo "  <li class='page-item active '>
                                        <a class='page-link' href='product.php?page=" . $i . "'><span class='sr-only'>" . $i . "</span></a>
                                    </li>";
                        } else {
                            echo "  <li class='page-item '>
                                        <a class='page-link' href='product.php?page=" . $i . "'><span class='sr-only'>" . $i . "</span></a>
                                    </li>";
                        }
                    };

                    if ($page == $NoP) {
                        echo "  <li class='page-item disabled '>
                                    <a class='page-link' href='' aria-label='Next'>
                                        <span aria-hidden='true'>&raquo;</span>
                                    </a>
                                </li>";
                    } else {
                        echo "  <li class='page-item '>
                                     <a class='page-link' href='product.php?page=" . ($page + 1) . "' aria-label='Next'>
                                        <span aria-hidden='true'>&raquo;</span>
                                    </a>
                                </li>";
                    }

                    echo "</ul></nav>"; ?>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include('../partials/footer.php') ?>
</body>

</html>