<?php
require '../app/Models/jorden1.php';
require_once __DIR__ . '/../bootstrap.php';
use App\Models\Jordan1;

//require_once __DIR__ . '/../bootstrap.php';
$alert = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !empty($_POST['name']) && !empty($_POST['img1'])
        && !empty($_POST['img2']) && !empty($_POST['img3'])
        && !empty($_POST['img4']) && !empty($_POST['price'])
    ) {
        $Jordan1s = new Jordan1($PDO);
        $Jordan1s->name = $_POST['name'];
        $Jordan1s->img_1 = $_POST['img1'];
        $Jordan1s->img_2 = $_POST['img2'];
        $Jordan1s->img_3 = $_POST['img3'];
        $Jordan1s->img_4 = $_POST['img4'];
        $Jordan1s->price = $_POST['price'];
        $Jordan1s->size_36 = $_POST['size_36'];
        $Jordan1s->size_36_5 = $_POST['size_36_5'];
        $Jordan1s->size_37 = $_POST['size_37'];
        $Jordan1s->size_37_5 = $_POST['size_37_5'];
        $Jordan1s->size_38 = $_POST['size_38'];
        $Jordan1s->size_38_5 = $_POST['size_38_5'];
        $Jordan1s->size_39 = $_POST['size_39'];
        $Jordan1s->size_39_5 = $_POST['size_39_5'];
        $Jordan1s->size_40 = $_POST['size_40'];
        $Jordan1s->size_40_5 = $_POST['size_40_5'];
        $Jordan1s->size_41 = $_POST['size_41'];
        $Jordan1s->size_41_5 = $_POST['size_41_5'];
        $Jordan1s->size_42 = $_POST['size_42'];
        $Jordan1s->size_42_5 = $_POST['size_42_5'];
        $Jordan1s->size_43 = $_POST['size_43'];
        $Jordan1s->size_43_5 = $_POST['size_43_5'];
        $Jordan1s->size_44 = $_POST['size_44'];
        $Jordan1s->size_44_5 = $_POST['size_44_5'];
        $Jordan1s->save();
        $alert = 1;
        //header("Location: ../public/admin.php");
    } else {
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/fitness-bodybuiding/100/sneakernike-1024.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/main.css">
    <style>
        body,
        html {
            background-color: #C3C1E6;
            background-image: linear-gradient(to right, #C3C1E6, #D2C6E8, #E1CCEB, #F0D1ED, #FFD6EF);
        }
    </style>
</head>

<body>
    <div class="contener">
        <!-- <div class="row"> -->
            <h2 class="text-center">Thêm sản phẩm mới</h2>
            <ul class="list-group col-6 offset-3">
                <li class="list-group-item">
                    <form id="add_product" method="post" class="form-horizontal" action="add_product.php">
                        <?php
                        if ($alert == 1) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                Đã thêm sản phẩm mới thành công!
                                <button type="button" class=" btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        } ?>
                        <h6>*Nếu hết size có thể không điền gì hoặc điền là 0</h6>
                        <div class="row">
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Tên sản phẩm:</label>
                                <input type="text" class="form-control col-sm-7" name="name" placeholder="Tên sản phẩm">
                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Giá sản phẩm:</label>
                                <input type="number" class="form-control col-sm-7" name="price" placeholder="Giá sản phẩm" min="0">
                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">url ảnh 1:</label>
                                <input type="text" class="form-control col-sm-7" name="img1" placeholder="url ảnh 1">
                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">url ảnh 2:</label>

                                <input type="text" class="form-control col-sm-7" name="img2" placeholder="url ảnh 2">
                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">url ảnh 3:</label>

                                <input type="text" class="form-control col-sm-7" name="img3" placeholder="url ảnh 3">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">url ảnh 4:</label>

                                <input type="text" class="form-control col-sm-7" name="img4" placeholder="url ảnh 4">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 36:</label>

                                <input type="number" class="form-control" name="size_36" placeholder="Số lượng size 36">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 36.5:</label>

                                <input type="number" class="form-control" name="size_36_5" placeholder="Số lượng size 36.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 37:</label>

                                <input type="number" class="form-control" name="size_37" placeholder="Số lượng size 37">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 37.5:</label>

                                <input type="number" class="form-control" name="size_37_5" placeholder="Số lượng size 37.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 38:</label>

                                <input type="number" class="form-control" name="size_38" placeholder="Số lượng size 38">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 38.5:</label>

                                <input type="number" class="form-control" name="size_38_5" placeholder="Số lượng size 38.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 39:</label>

                                <input type="number" class="form-control" name="size_39" placeholder="Số lượng size 39">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 39.5:</label>

                                <input type="number" class="form-control" name="size_39_5" placeholder="Số lượng size 39.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 40:</label>

                                <input type="number" class="form-control" name="size_40" placeholder="Số lượng size 40">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 40.5:</label>

                                <input type="number" class="form-control" name="size_40_5" placeholder="Số lượng size 40.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 41:</label>

                                <input type="number" class="form-control" name="size_41" placeholder="Số lượng size 41">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 41.5:</label>

                                <input type="number" class="form-control" name="size_41_5" placeholder="Số lượng size 41.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 42:</label>

                                <input type="number" class="form-control" name="size_42" placeholder="Số lượng size 42">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 42.5:</label>

                                <input type="number" class="form-control" name="size_42_5" placeholder="Số lượng size 42.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 43:</label>

                                <input type="number" class="form-control" name="size_43" placeholder="Số lượng size 43">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 43.5:</label>

                                <input type="number" class="form-control" name="size_43_5" placeholder="Số lượng size 43.5">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 44:</label>

                                <input type="number" class="form-control" name="size_44" placeholder="Số lượng size 44">

                            </div>
                            <div class="form-group m-3 col-5">
                                <label for="" class="mb-1">Số lượng size 44.5:</label>

                                <input type="number" class="form-control" name="size_44_5" placeholder="Số lượng size 44.5">

                            </div>

                        </div>

                        <div class="form-group row m-3">
                            <button type="submit" class="btn btn-primary col-sm-3 border" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm</button>
                            <a href="./admin.php" class="btn btn-primary col-sm-3 border" data-bs-toggle="modal">Trở về</a>
                        </div>
                    </form>
                </li>
            </ul>
        <!-- </div> -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../libraries/jquery.validate.js"></script>
    <!-- <script src="../js/add.js"></script> -->
</body>