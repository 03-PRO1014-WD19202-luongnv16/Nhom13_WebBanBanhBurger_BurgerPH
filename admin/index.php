<?php
    include "../model/pdo.php";
    include "header.php";
    //controller
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'adddm':
                //Kiem tra xem nguoi dung co click vào nút add hay không
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $ten_loai=$_POST['ten-loai'];
                    $sql = "INSERT INTO danhmuc(name) values ('$ten_loai')";
                    pdo_query_one($sql);
                    $thongbao="Them thanh cong";
                }
                    include "danhmuc/add.php";
                    break;
            case 'addsp':
                    include "sanpham/add.php";
                    break;    
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>