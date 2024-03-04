<?php
// session_start();

// $conn = mysqli_connect("localhost","root","","project");
require_once '../bootstrap.php';
require '../app/Models/Jorden1.php';

use App\Models\Jordan1;

$jordan1 = new Jordan1($PDO);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['jd_id']) && ($jordan1->find($_POST['jd_id'])) !== null) {
        $jordan1->delete();
        echo 'thanh cong';
    } else {
        include('../partials/error.php');
        die();
    }
} else {
    include('../partials/error.php');
    die();
}
// if(isset($_POST['delete_contact'])){
//     $id = $_POST['id'];
//     $del_url_img = $_POST['del_url_img_1'];

//     $query = "DELETE FROM info WHERE jd_id='$id' ";
//     $query_run = mysqli_query($conn,$query);

//     if($query_run){
//         unlink("public/",$del_url_img);
//         $_SESSION['status'] = 'Data Updated Successfully';
//         header("Location: admin.php");
//     }
//     else{
//         $_SESSION['status'] = 'Data not Deleted';
//         header("Location: admin.php");
//     }
// }

//redirect(BASE_URL_PATH);