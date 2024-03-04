<?php
session_start();

require '../app/Models/jorden1.php';
require_once __DIR__ . '/../bootstrap.php';

use App\Models\Jordan1;
if(isset($_SESSION['user'])){
    if($_SESSION['user']!=='me'){
        echo '<script>alert("Hãy đăng nhập tài khoản admin")</script>';
        header("location:./demo_login.php");
    }
}else{
    echo '<script>alert("Hãy đăng nhập tài khoản admin")</script>';
    header("location:./demo_login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
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
    <div class="container">
        <section id="inner" class="inner-section section">
            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Quản trị</h2>
            <div class="row">
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12">
                    <a href="add_product.php" class="btn btn-primary" style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i>Sản phẩm mới</a>

                    <a href="view_contact.php" class="btn btn-primary " style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i>Xem liên hệ</a>
                    <a href="logout.php" class="btn btn-primary " style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i>Thoát</a>
                    <!-- Table Starts Here -->
                    <table id="contacts" class="table table-bordered table-responsive table-striped border-primary">
                        <div>
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th class="col-6">Name</th>
                                    <th class="col-2">Hình ảnh</th>
                                    <th class="col-2">Giá</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                try {
                                    $Jordan1s = new Jordan1 ($PDO);
                                    $Jordan1s = $Jordan1s->all();
                                } catch (PDOException $e) {
                                    include("../partials/error.php");
                                    die();
                                }
                                $htmlspecialchars = 'htmlspecialchars';

                                $i = 1;
                                foreach ($Jordan1s as $data) :
                                    echo
                                    " <tr class='text-center'>
                                            <td>" . htmlspecialchars($i) . "
                                            <td>" . htmlspecialchars($data->get_name()) . "</td>
                                            <td><img src='" . htmlspecialchars($data->get_img_1()) . " ' class= 'mx-auto d-block img-fluid' alt='' /></td>
                                            <td> " . htmlspecialchars(number_format($data->get_price())) . "</td>
                                            <td>
                                                <form class='edit' action='edit.php' method='POST' style='display: inline;'>
                                                    <input type='hidden' name='jd_id' value='".$data->get_id() ."'>
                                                    <button type='submit' class='btn btn-xs btn-warning'>Edit</button>
                                                </form>
                                                <button type='submit' class='btn btn-xs btn-danger' name='delete-contact' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                                    <i alt='Delete' class='fa fa-trash'>Delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Xác nhận</h1>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        Bạn có chắc muốn xoá sản phẩm này không?
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Đóng</button>
                                                        <form class='delete' action='delete_product.php' method='POST' style='display: inline;'>
                                                            <input type='hidden' name='jd_id' value='".$data->get_id() ."'>
                                                            <button type='submit' class='btn btn-danger'>Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";

                                    $i++;
                                endforeach;
                                $i = 0;
                                ?>
                            </tbody>
                        </div>
                    </table>
                </div>
                <!-- <div class="modal"> -->
            </div>

            <!-- </div> -->
            <!-- <div id="delete-confirm" class="modal fade" role="dialog">"
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirmation</h4>
                            </div>
                            <div class="modal-body">Do you want to delete this contact?</div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-danger" id="delete">Delete</button>
                                <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div> -->
    </div>

    </section>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
</body>