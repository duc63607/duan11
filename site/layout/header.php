<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

</head>
<style>
    .color label {

        width: 15px;
        height: 15px;
        cursor: pointer;
        box-shadow: 0 0 5px #000;

    }

    input[type="radio"] {
        display: none;
    }

    .color #gender input[type="radio"]+label {
        position: relative;
        cursor: pointer;
        padding-left: 28px;
        margin: 0 20px 0 0;
    }

    .color input[type="radio"]+label:before,
    .color input[type="radio"]+label:after {
        content: "";
        position: absolute;

        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;

    }

    .color input[type="radio"]+label:before {
        top: 10px;
        left: 50px;
        width: 10px;
        height: 10px;
        background: #853434;
        -moz-box-shadow: inset 0 0 0 18px #efefef;
        -webkit-box-shadow: inset 0 0 0 18px #efefef;
        box-shadow: inset 0 0 0 18px #efefef;
        display: none;
    }



    .color input[type="radio"]:checked+label:before {
        -moz-box-shadow: inset 0 0 0 4px #efefef;
        -webkit-box-shadow: inset 0 0 0 4px #efefef;
        box-shadow: inset 0 0 0 4px #efefef;
        width: 30px;
        height: 30px;

    }

    .color input[type="radio"]:checked+label:after {
        -moz-transform: translate(-7%, -7%) scale(1);
        -ms-transform: translate(-7%, -7%) scale(1);
        -webkit-transform: translate(-7%, -7%) scale(1);
        transform: translate(-20%, -20%) scale(1);
        -moz-animation: ripple none;
        -webkit-animation: ripple none;
        animation: ripple none;
        width: 25px;
        height: 25px;
        border: 2px solid gray;
        border-radius: 50%;
    }

    /*Size
*/
    .size label {

        width: 30px;
        height: 30px;
        cursor: pointer;


    }

    input[type="radio"] {
        display: none;
    }

    .size #gender input[type="radio"]+label {
        position: relative;
        cursor: pointer;
        padding-left: 28px;
        margin: 0 20px 0 0;
    }

    .size input[type="radio"]+label:before,
    .size input[type="radio"]+label:after {
        content: "";
        position: absolute;

        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;

    }

    .size input[type="radio"]+label:before {
        top: 10px;
        left: 50px;
        width: 10px;
        height: 10px;
        background: #853434;
        -moz-box-shadow: inset 0 0 0 18px #efefef;
        -webkit-box-shadow: inset 0 0 0 18px #efefef;
        box-shadow: inset 0 0 0 18px #efefef;
        display: none;
    }



    .size input[type="radio"]:checked+label:before {
        -moz-box-shadow: inset 0 0 0 4px #efefef;
        -webkit-box-shadow: inset 0 0 0 4px #efefef;
        box-shadow: inset 0 0 0 4px #efefef;
        width: 30px;
        height: 30px;

    }

    .size input[type="radio"]:checked+label:after {
        -moz-transform: translate(-7%, -7%) scale(1);
        -ms-transform: translate(-7%, -7%) scale(1);
        -webkit-transform: translate(-7%, -7%) scale(1);
        transform: translate(-67%, -13%) scale(1);
        -moz-animation: ripple none;
        -webkit-animation: ripple none;
        animation: ripple none;
        width: 30px;
        height: 30px;
        border: 2px solid gray;
        margin: auto;
    }

    /*
*/
    .yellow {
        background-color: yellow;
    }

    .green {
        background-color: green;
    }

    .black {
        background-color: #000;
    }

    .pink {
        background-color: pink;
    }

    .cyan {
        background-color: cyan;
    }

    .detail-pro-offer-content {
        color: #555;
        font-size: 14px;
        max-width: 180px;
    }

    .detail-pro-offer-hotline {
        color: #ff0000;
        font-weight: 700;
    }

    .detail-pro-offer-more {
        text-decoration: none;
        color: #f1dc68;
        font-weight: 700;
        text-transform: uppercase;
    }

    .detail-pro-tab {
        position: relative;
        z-index: 1;
        margin-bottom: 15px;
    }

    .detail-pro-tab::before {
        content: "";
        width: 100%;
        height: 1px;
        background-color: #ddd;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        z-index: -1;
    }

    .detail-pro-tab-content {
        margin-bottom: 50px;
    }

    .detail-pro-btn {
        padding: 10px 15px;
        border: solid 3px #ddd;
        color: #111;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.25s linear;
        background-color: #fff;
        margin-right: 7px;
    }

    .detail-pro-btn.active {
        border: solid 3px #f23f2f;
        color: #f23f2f;
    }

    .detail-pro-description {
        color: #555;
        font-size: 15px;
        margin-bottom: 13px;
    }

    .detail-pro-desc-img {
        width: 100%;
        max-width: 1024px;
        margin: 0 auto 12px auto;
    }

    .detail-pro-specifi {
        font-size: 15px;
        color: #000;
    }

    .detail-pro-review-title {
        color: #555;
        font-size: 21px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .detail-pro-user-review {
        padding: 20px;
        border-bottom: solid 1px #ccc;
        margin-bottom: 15px;
    }

    .detail-pro-user-rate {
        display: flex;
        align-items: center;
        margin-bottom: 14px;
    }

    .detail-pro-date {
        font-size: 16px;
        color: #555;
        padding-right: 8px;
    }

    .detail-pro-user-stars {
        margin-right: 8px;
    }

    .detail-pro-user-icon {
        font-size: 20px;
        color: #f4ca16;
        cursor: pointer;
    }

    .detail-pro-user-info {
        font-size: 16px;
        color: #555;
        padding-right: 8px;
    }

    .detail-pro-user-image {
        width: 100%;
        max-width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
    }

    .detail-pro-user-commet {
        font-size: 16px;
        color: #555;
        padding-right: 8px;
    }

    .detail-pro-rate {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    .detail-pro-rate-title {
        font-size: 16px;
        color: #555;
        margin-right: 6px;
    }

    .detail-pro-comment {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .detail-pro-comment label {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
    }

    .detail-pro-comment textarea {
        padding: 10px 0 0 25px;
        resize: unset;
    }

    .detail-pro-review-btn {
        padding: 10px 25px;
        background-color: #000;
        border-radius: 50px;
        cursor: pointer;
        color: #fff;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 700;
        transition: all 0.25s linear;
    }

    .detail-pro-review-btn a {
        text-decoration: none;
        color: #fff;
        display: inline-block;
        transition: all 0.25s linear;
    }

    .detail-pro-review-btn a:hover {
        color: #f1dc68;
    }

    .detail-pro-review-btn:hover {
        color: #f1dc68;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
        font: inherit;
    }

    .detail-pro-star {
        border: none;
        float: left;
    }

    .detail-pro-star>input {
        display: none;
    }

    /*ẩn input radio - vì chúng ta đã có label là GUI*/

    .detail-pro-star>label:before {
        margin: 5px;
        font-size: 1.25em;
        cursor: pointer;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    /*1 ngôi sao*/

    .detail-pro-star>label {
        color: #ddd;
        float: right;
    }

    /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
    /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/

    .detail-pro-star>input:checked~label,
    .detail-pro-star:not(:checked)>label:hover,
    .detail-pro-star:not(:checked)>label:hover~label {
        color: #ffd700;
    }

    /* Hover vào các sao phía trước ngôi sao đã chọn*/
    .detail-pro-star>input:checked+label:hover,
    .detail-pro-star>input:checked~label:hover,
    .detail-pro-star>label:hover~input:checked~label,
    .detail-pro-star>input:checked~label:hover~label {
        color: #ffed85;
    }


    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

    html,
    body {
        height: 100%;
        min-height: 100%;

        font-family: 'Noto Sans', sans-serif;

    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }


    .page-wrapper button .cart-item:before {
        content: "1";
        display: block;
        line-height: 24px;
        height: 24px;
        width: 24px;
        font-family: 'Noto Sans', sans-serif;
        font-size: 10px;
        font-weight: 600;
        background: #242424;
        color: white;
        border-radius: 20px;
        text-align: center;
    }


    .cart {

        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

    }



    .cart:before {
        content: attr(data-totalitems);
        font-family: 'Noto Sans', sans-serif;
        font-size: 10px;
        font-weight: 600;
        position: absolute;
        top: -5px;
        right: -5px;
        background: #242424;
        line-height: 24px;
        padding: 0 5px;
        height: 24px;
        min-width: 24px;
        color: white;
        text-align: center;
        border-radius: 24px;
    }

    .page-wrapper button.sendtocart .cart-item {
        display: block;
        animation: xAxis 1s forwards cubic-bezier(1, 0.44, 0.84, 0.165);
    }

    .page-wrapper button.sendtocart .cart-item:before {
        animation: yAxis 1s alternate forwards cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    @keyframes xAxis {
        100% {
            transform: translateX(calc(50vw - 105px));
        }
    }

    @keyframes yAxis {
        100% {
            transform: translateY(calc(-50vh + 75px));
        }
    }

    .cart.shake {
        animation: shakeCart 0.4s ease-in-out forwards;
    }

    @keyframes shakeCart {
        25% {
            transform: translateX(6px);
        }

        50% {
            transform: translateX(-4px);
        }

        75% {
            transform: translateX(2px);
        }

        100% {
            transform: translateX(0);
        }
    }

    .headcart {
        position: fixed;
        width: 500px;
        right: -500px;
        height: 100%;
        background-color: white;
        animation-name: mymove;
        animation-duration: 1.5s;
        overflow: auto;
    }

    .headcart {
        right: 0px;
        position: fixed;
        z-index: 1;
    }

    .login {
        position: fixed;
        width: 500px;
        right: -500px;
        height: 100%;
        background-color: white;
        animation-name: mymove;
        animation-duration: 1.5s;
        overflow: auto;
    }




    .login {

        right: 0px;
        position: fixed;
        z-index: 1;
    }

    .videomain {

        left: 0;
        right: 0;


    }




    @keyframes mymove {
        from {
            right: -500px;
        }

        to {
            right: 0px;
        }
    }
</style>

<body>
    <?php
    if (isset($_SESSION['cart']) && ($_SESSION['cart'] != [])) {
        //echo var_dump($_SESSION['cart']); 
        if (isset($_POST['update_quantity'])) {
            $quantity = array();
            $idproduct = array();
            $quantity = $_POST['quantity'];
            $idproduct = $_POST['product_id'];
            echo print_r($quantity);
            echo print_r($idproduct);
            die();
        }
    ?>
        <div class="">
            <div class="headcart w-[30%] hidden shadow-lg shadow-cyan-500/50" id="headgh">

                <div class="mx-10 my-10 text-center">
                    <div class="head flex items-center justify-between  shadow-lg shadow-cyan-500/50">
                        <h3 class="text-[18px] font-semibold pl-8">TÚI MUA SẮM CỦA BẠN</h3>
                        <button class="hover:bg-[#F8FAFC] hover:shadow-lg hover:shadow-cyan-500/50 hover:text-black text-xl  border-2 py-3 ml-10 px-6" id="closed">X</button>
                    </div>
                    <?php
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['cart'] as $product) {
                        $ttien = $product[3] * $product[4];
                        $tong += $ttien;
                        echo '
                    <div class="my-10">
                        <div class="grid-cols-2 grid items-center my-4 shadow-lg shadow-cyan-500/50 rounded-lg">
                            <img src="' . $product[2] . '" alt="">
                            <div class="">
                                <h3 class="my-4">' . $product[1] . '</h3>
                                <div class="wrapper">

                                    <div class="product-qty space-x-2">
                                        <button class="bg-[#E8E8E8] " id="decrement">
                                            <ion-icon name="remove-outline"></ion-icon>
                                        </button>

                                        <span id="quantity">x' . $product[4] . '</span>

                                        <button id="increment" class="bg-[#E8E8E8] ">
                                            <ion-icon name="add-outline"></ion-icon>
                                        </button>
                                    </div>

                                    <div class="price my-2">
                                        $ <span id="price">' . $product[3] . '</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                            ';
                        $i++;
                    }
                    ?>
                    <hr>
                </div>
                <hr width=" mx-auto">
                <div class="flex justify-between my-10">
                    <h3 class="text-xl">TỔNG CỘNG</h3>
                    <div class="subtotal">
                        <span>$ <span id="subtotal"><?= $tong; ?></span></span>
                    </div>
                </div>

                <div class="hover:bg-[#EAE8E4] hover:text-black  bg-black text-[#FFFFFF] py-3 text-center  text-[16px] w-full">
                    <a href="index.php?act=viewcart" class="">Thanh
                        toán ngay</a>
                </div>

            </div>

        </div>
        </div>
    <?php

    } else {

        echo ' <div class="">
        <div class="headcart w-[30%] hidden shadow-lg shadow-cyan-500/50" id="headgh">
        <div class="mx-10 my-10 text-center">
            <div class="head flex items-center justify-between  shadow-lg shadow-cyan-500/50">
                <h3 class="text-[18px] font-semibold pl-8">TÚI MUA SẮM CỦA BẠN</h3>
            </div>

            <hr>
        </div>
        
        <hr width=" mx-auto">
    </div>
    </div>

';
    }

    ?>











    <div class="mx-auto max-w-screen-2xl">

        <div class="login hidden px-12" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
                'Open Sans', 'Helvetica Neue', sans-serif" id="content">
            <div class="my-4">
                <?php
                if (!isset($_SESSION['dangky'])) {
                    echo '
                    <div class="flex justify-between items-center">
                    <h1 class="font-bold text-2xl">ĐĂNG NHẬP</h1>

                    <button class="border-[1px] border-gray-200 text-3xl px-4 py-2" id="btn1">X</button>
                </div>
                <hr>
                <form method="post" action="index.php?act=signin">
                    <h3 class="font-semibold mt-4"> TÔI ĐÃ CÓ TÀI KHOẢN</h3>
                    <div class="py-6 space-y-4">
                        <label for="">Tên tài khoản *</label><br>
                        <input type="text" name="name"  placeholder="" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class=" py-4 space-y-4">
                        <label for="">Mật khẩu *</label><br>
                        <input type="password" name="password"  placeholder="*******" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <li class="list-none"><a href=""><u>Quên mật khẩu ?</u></a></li>
                    <input type="submit" value="Đăng Nhập" name="signin" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">
                </form>
                <hr>
                <div class="space-y-10 my-10">
                    <h3 class="font-semibold my-4">TÔI KHÔNG CÓ TÀI KHOẢN ?</h3>
                    <span>Tận hưởng các lợi ích bổ sung và trải nghiệm phong phú hơn bằng cách tạo tài khoản cá
                        nhân</span>
                    <button type="submit" class="hover:bg-[#EAE8E4] hover:text-black  bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]"><a href="user.php">Tạo
                        tài khoản</a></button>
                </div>';
                } else {
                    echo '
                    <div class="flex justify-between items-center">
                    <h1 class="font-bold text-2xl">ĐĂNG XUẤT</h1>

                    <button class="border-[1px] border-gray-200 text-3xl px-4 py-2" id="btn1">X</button>
                </div>
                <hr>
                <form method="post" action="index.php?act=signout">
                 
                    <input type="submit" value="Đăng xuất" name="signout" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">
                </form>
                <form method="post" action="index.php?act=detail_order">
                 
                    <input type="submit" value="Đơn hàng của tôi" name="" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">
                </form>
             
                
                ';
                    if ($_SESSION['role'] == 1) {
                        echo '
                    <form method="post" action="../admin/index.php">
                 
                    <input type="submit" value="Quay về trang admin" name="" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">
                </form>
                    ';
                    }
                }
                ?>
            </div>
        </div>
    </div>


    <div class="videomain" id="videomain">
        <div class="" style="font-family: 'Courier New', Courier, monospace;">
            <div class="logo 	position: relative max-w-[1080px] mx-auto grid justify-between items-center grid-cols-3 my-5 mb-10">

                <div class="flex items-center gap-10">

                    <button id="button"><img src="../upload/menu.svg" alt="" class="w-6"></button>
                    <button id="tim_kiem">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 19" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                </div>

                <div class="items-center text-center text-[30px] ">
                    <a href="index.php">Royal Center</a>
                </div>
                <div class="flex gap-10 justify-end items-center">
                    <button id="btn2" class="font-black text-center text-[16px]"> <?php echo isset($_SESSION['dangky']) ? 'Chào: ' . $_SESSION['dangky'] :  'Tài khoản' ?></button>



                    <a id="opencart">

                        <div id="cart" class="cart" data-totalitems="0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 3 24 20" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-right">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </div>

                    </a>
                </div>
            </div>
        </div>
        <div class="list-none hidden flex justify-center space-x-8 my-10 " id="menu">
            <li><a class="hover:underline" href="index.php">Trang chủ</a></li>
            <li><a class="hover:underline" href="index.php?act=san_pham">Sản phẩm</a></li>
            <li><a class="hover:underline" href="index.php?act=gioi_thieu">Giới Thiệu</a></li>
            <li><a class="hover:underline" href="index.php?act=lien_he">Liên hệ</a></li>
            <li><a class="hover:underline" href="">Tin Tức</a></li>

        </div>
        <div class="list-none hidden flex justify-center space-x-8 my-10 " id="tk">
            <form action="index.php?act=san_pham" method="post">
                <input type="text" placeholder="Tìm kiếm sản phẩm" name="kw">
                <button type="submit" name="timkiem">Tìm Kiếm</button>

            </form>
        </div>
        <script>
            const tk = document.getElementById("tk");
            const tim_kiem = document.getElementById("tim_kiem");

            tim_kiem.addEventListener("click", function() {
                tk.classList.toggle("hidden");
            });
        </script>
        <script>
            const menu = document.getElementById("menu");
            const button = document.getElementById("button");

            button.addEventListener("click", function() {
                menu.classList.toggle("hidden");
            });
        </script>