<?php
require_once '../bootstrap.php';
require '../app/Models/contacts.php';

use App\Models\contact;


$contact = new Contact($PDO);
echo $_POST['ct_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ct_id']) && ($contact->find($_POST['ct_id'])) !== null) {
        $contact->delete();
        echo 'thanh cong';
    } else {
        header("Location: ../partials/error.php");
        die();
    }
} else {

    header("Location: ../partials/error.php");
    die();
}

//redirect(BASE_URL_PATH);