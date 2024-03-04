
<?php

$htmlspecialchars = 'htmlspecialchars';
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$NoP =  ceil(count($Jordan1s) / 8);
$number_product = $page * 8;
if ($number_product > count($Jordan1s)) $number_product = count($Jordan1s);
for ($i = $page * 8 - 8; $i < $number_product; $i++) {

  echo "<div class='col-12 mb-3 col-md-3 col-sm-3'>
        <div class='card' style='height: 100%;'>
          <a class='text-decoration-none' id='link-product' href='chitietsp.php?product=" . $Jordan1s[$i]->get_name() . "'>
          <div class='zoom'>
            <img src='" . htmlspecialchars($Jordan1s[$i]->get_img_1()) . "' class= 'card-img-bottom' />
          </div>
            <div class='card-body'>
              <h5 class='card-title mb-0 text-dark'>" . htmlspecialchars($Jordan1s[$i]->get_name()) . "</h5>
              <p class='card-text'>
                <span class='origin-number text-dark'>" . htmlspecialchars(number_format($Jordan1s[$i]->get_price())) . "đ</span>
              </p>
            </div>
          </a>
        </div></div>";
}
?>