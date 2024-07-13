<?php
    include "../views/header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'product':
                include "../views/product.php";
                break;
            case 'productdetail':
                include "../views/productdetail.php";
                break;
            case 'dangki':
                include "../views/tai-khoan/signup.php";
                    break;
            case 'dangnhap':
                include "../views/tai-khoan/signin.php";
                    break;
            default:
                include "../views/home.php";
                break;
        }
    }else{
        include "../views/home.php";
    }
    include "../views/footer.php";
?>