<?php
session_start();
require_once "dao/pdo.php";
// require_once "dao/binh-luan.php";
require_once "dao/hang-hoa.php";
// require_once "dao/khach-hang.php";
// require_once "dao/loai.php";
// require_once "dao/thong-ke.php";


require_once "view/header.php";

if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    $pg = $_GET['pg'];
    switch ($pg) {
        case "product":
            require_once 'view/product.php';
            break;
        default:
            $sp_khuyenmai = get_dssp_khuyenmai();
            $sp_giacao = get_dssp_giacao();
            require_once 'view/home.php';
            break;
    }
} else {
    $sp_khuyenmai = get_dssp_khuyenmai();
    $sp_giacao = get_dssp_giacao();
    require_once 'view/home.php';
}
require_once 'view/footer.php';