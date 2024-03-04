<?php

require '../app/Models/jorden1.php';
require_once __DIR__ . '/../bootstrap.php';

use App\Models\Jordan1;
use App\Models\size;

if (isset($_GET['product'])) {
    $product = $_GET['product'];
} else {
    include('../partials/error.php');
    die();
}
try {
    $Jordan1s = new Jordan1($PDO);
} catch (PDOException $e) {
    include('../partials/error.php');
    die();
}
$Jordan1s = $Jordan1s->find_name($_GET['product']);
//echo $_GET['product'];
//echo $Jordan1s[0]->get_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/fitness-bodybuiding/100/sneakernike-1024.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .footer {
            width: 100%;
            height: 100px;
            background-image: url(https://bizweb.dktcdn.net/100/424/874/products/z2511971698958-d71dad97a3071a9b873f606ff53797b8.jpg?v=1621931223237);
            background-size: 100%;
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
                <!-- <div class="col-2"> -->
                <!-- <ol class="float-left" style="list-style-type: none;">
                        <li class="p-1 m-1"><img style="width:40%;" src="../public/image/171545C/Giay-171545C-1.jpg" alt=""></li>
                        <li class="p-1 m-1"><img style="width:40%;" src="../public/image/171545C/Giay-171545C-2.png" alt=""></li>
                        <li class="p-1 m-1"><img style="width:40%;" src="../public/image/171545C/Giay-171545C-3.jpg" alt=""></li>
                        <li class="p-1 m-1"><img style="width:40%;" src="../public/image/171545C/Giay-171545C-4.jpg" alt=""></li>
                    </ol> -->
                <!-- </div> -->
                <div class="col-12 col-sm-6 col-md-6">
                    <?php echo "<img style='width:100%;' src='" . $Jordan1s->img_1 . "' alt=''> " ?>
                </div>
                <div class="col-12 col-sm-6 col-sm-6 ">
                    <div>
                        <a href="index.php" class="text-dark font-weight-bold" style="text-decoration: none;">Trang chủ</a>
                        >>
                        <a href="product.php" class="text-dark font-weight-bold" style="text-decoration: none;">Sản phẩm</a>
                        >>
                        <?php echo "<p>Giày " . $Jordan1s->name . "</p>"; ?>
                    </div>
                    <hr>
                    <div>
                        <?php echo "<h1>Giày " . $Jordan1s->name . "</h1>"; ?>

                        <br>
                        <?php echo "<h2><b>" . number_format($Jordan1s->price) . "đ</b></h2>"; ?>

                    </div>
                    <br>
                    <div>
                        <!-- <div>
                            <span>
                                <span>
                                    <b>
                                        <span>2.496.000&nbsp;đ</span> x3 kỳ
                                    </b>
                                </span>
                                miễn lãi với
                                <a href="#" style="text-decoration: none;">Fundiin?</a>
                            </span>
                        </div>
                        <br>
                        <div>
                            <span style="background-color: #07ddce;color: #fff;" class="p-2 rounded">Giảm đến <b class="text-warning">70k</b> cho ĐH từ <b class="text-warning">100k</b> khi thanh toán qua Fundiin</span>
                        </div> -->
                        <br>
                        <table cellspacing="0">
                            <tbody>
                                <td class="label">
                                    <label for="">Size</label>
                                </td>
                                <tr>
                                    <td class="value">
                                        <div>
                                            <ul style="list-style-type:none;" class="row">
                                                <?php
                                                if ($Jordan1s->size_36 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">36</li>';
                                                if ($Jordan1s->size_36_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">36_5</li>';
                                                if ($Jordan1s->size_37 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">37</li>';
                                                if ($Jordan1s->size_37_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">37_5</li>';
                                                if ($Jordan1s->size_38 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">38</li>';
                                                if ($Jordan1s->size_38_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">38_5</li>';
                                                if ($Jordan1s->size_39 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">39</li>';
                                                if ($Jordan1s->size_39_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">39_5</li>';
                                                if ($Jordan1s->size_40 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">40</li>';
                                                if ($Jordan1s->size_40_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">40_5</li>';
                                                if ($Jordan1s->size_41 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">41</li>';
                                                if ($Jordan1s->size_41_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">41_5</li>';
                                                if ($Jordan1s->size_42 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">42</li>';
                                                if ($Jordan1s->size_42_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">42_5</li>';
                                                if ($Jordan1s->size_43 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">43</li>';
                                                if ($Jordan1s->size_43_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">43_5</li>';
                                                if ($Jordan1s->size_44 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">44</li>';
                                                if ($Jordan1s->size_44_5 > 0)
                                                    echo '<li class="border border-secondary m-1 col-1 col-sm-1 col-md-1 d-flex align-items-center justify-content-center" style="width:20%;">44_5</li>';
                                                ?>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="center">
                    <?php
                    echo "<img class='p-1 m-1 mx-auto d-block img-fluid' style='width:70%' src='" . $Jordan1s->img_2 . "' alt=''>";
                    echo "<img class='p-1 m-1 mx-auto d-block img-fluid' style='width:70%' src='" . $Jordan1s->img_3 . "' alt=''>";
                    echo "<img class='p-1 m-1 mx-auto d-block img-fluid' style='width:70%' src='" . $Jordan1s->img_4 . "' alt=''>";
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php include('../partials/footer.php') ?>
</body>

</html>