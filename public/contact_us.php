<?php
require '../app/Models/contacts.php';
require_once __DIR__ . '/../bootstrap.php';

use App\Models\contact;

$alert = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !empty($_POST['name_contact']) && !empty($_POST['email'])
        && !empty($_POST['notes'])
    ) {
        $contact = new contact($PDO);
        $contact->name_contact = $_POST['name_contact'];
        $contact->email = $_POST['email'];
        $contact->notes = $_POST['notes'];
        $contact->add_contact();
        $alert = 1;
    } else {
    }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
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
                <h2 class="text-center">Liên hệ với chúng tôi</h2>
                <hr>
                <div class="col-sm-5 offset-sm-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13120.010475423811!2d105.76912306381091!3d10.027779993208421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1680058261626!5m2!1svi!2s" class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-sm-5">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <form id="contact" method="post" class="form-horizontal" action="./contact_us.php">
                                <?php
                                if ($alert == 1) {
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Thanks you!</strong> Cám ơn bạn đã liên hệ. Chúng tôi sẽ sớm liên hệ với bạn!
                                <button type="button" class=" btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                                } ?>
                                <div class="form-group row m-3">
                                    <input type="text" class="form-control col-sm-7" name="name_contact" placeholder="Họ và tên" require>
                                </div>
                                <div class="form-group row m-3">
                                    <input type="email" class="form-control col-sm-7" name="email" placeholder="Địa chỉ email" require>
                                </div>
                                <div class="form-group row m-3">
                                    <textarea type="text" class="form-control col-sm-7" rows="9" name="notes" placeholder="Lời nhắn" require></textarea>
                                </div>
                                <div class="form-group row m-3">
                                    <button type="submit" class="btn btn-primary col-sm-12" data-bs-toggle="modal" data-bs-target="#exampleModal ">Gửi</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </main>
    <!-- footer -->
    <?php include('../partials/footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../libraries/jquery.validate.js"></script>
    <!-- <script type="text/javascript" src="contact.js"></script> -->
</body>