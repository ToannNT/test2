<?php
$showspkhuyenmai = "";
$showspgiacao = "";
// echo var_dump($sp_khuyenmai);
// echo var_dump($sp_giacao);
foreach ($sp_khuyenmai as $item) {
    extract($item);
    $showspkhuyenmai .= '
         <div class="box-sp">
            <img class="box-sp__img" src="' . $hinh . '" alt="">
            <p>Tên xe: ' . $ten . '</p>
            <p>Giá: ' . $gia . '</p>
            <p>Giảm giá: ' . $giam_gia . '</p>

        </div>
    ';
}


foreach ($sp_giacao as $item) {
    extract($item);
    $showspgiacao .= '
         <div class="box-sp">
            <img class="box-sp__img" src="' . $hinh . '" alt="">
            <p>Tên xe: ' . $ten . '</p>
            <p>Giá: ' . $gia . '</p>
            <p>Giảm giá: ' . $giam_gia . '</p>

        </div>
    ';
}

?>
<div class="container">
    <h1>TRANG CHỦ NÈ</h1> <br><br>
    <h2>SẢN PHẨM CÓ KHUYẾN MÃI NÈ</h2>
    <div class="container_box">
        <?= $showspkhuyenmai ?>
        <!-- <div class="box-sp">
            <img class="box-sp__img" src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935086855867.jpg" alt="">
            <p>Tên:SÁCH NÈ</p>
            <p>Giá: GIÁ NÈ</p>
        </div> -->
    </div> <br>
    <h2>SẢN PHẨM GIÁ TRÊN 1.000.000Đ NÈ</h2>
    <div class="container_box">
        <?= $showspgiacao ?>
        <!-- <div class="box-sp">
            <img class="box-sp__img" src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935086855867.jpg" alt="">
            <p>Tên:SÁCH NÈ</p>
            <p>Giá: GIÁ NÈ</p>
        </div> -->
    </div>
</div>