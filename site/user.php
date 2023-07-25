<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" class="mx-auto max-w-screen-2xl">
    <header>
        <div class="flex items-center space-x-4 mx-6 my-4">
            <a href="index.php">
                <h1 class="font-medium text-2xl font-semibold">ROYAL CENTER</h1>
            </a>
            <SPAN class="text-xl font-thin">|</SPAN>
            <SPAN class="font-thin text-[14px]">
                TẠO TÀI KHOẢN</SPAN>
        </div>
    </header>
    <div class="MENU border-[1px] border-gray-200 grid grid-cols-3">

        <form class="right bg-[#F6F5F3] col-span-2"  method="post" action="index.php?act=signup">
           
        <div class="mx-32 my-20">
        <a  href ="sign_in.php">
               <h3 class="font-bold text-2xl">ĐÃ CÓ TÀI KHOẢN ?</h3>
</a>
               <hr class="mt-5 mb-10">

                <h1 class="font-bold text-3xl ">TẠO TÀI KHOẢN MỚI</h1>
                <hr class="mt-5 mb-10">
         
                <h3 class="font-bold text-2xl ">ĐĂNG NHẬP THÔNG TIN</h3>
                <div class="bg-[#FFFFFF] my-10 rounded">
                    <div class="mx-10 py-10 space-y-4">
                        <label for="">Email *</label><br>
                        <input type="email" placeholder="name@example.com" name="email" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class="mx-10 py-10 space-y-4">
                        <label for="">Tên tài khoản *</label><br>
                        <input type="text" placeholder="Username1234 ?" name="username" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class="mx-10 py-10 space-y-4">
                        <label for="">Mật khẩu *</label><br>
                        <input type="password" placeholder="********" name="password" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class="mx-10 py-10 space-y-4">
                        <label for="">Họ và tên *</label><br>
                        <input type="text" placeholder="Nguyễn Văn A" name="fullname" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class="mx-10 py-10 space-y-4">
                        <label for="">Địa chỉ nhà *</label><br>
                        <input type="text" placeholder="Trịnh Văn Bô , Hà Nội Street" name="address" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                    <div class="mx-10 py-10 space-y-4">
                        <label for="">Điện thoại *</label><br>
                        <input type="text" placeholder="098+ ?? " name="phone" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
                    </div>
                </div>
                <button class="font-semibold text-xl px-6 py-2 bg-black text-[#FFFFFF]" type="submit" name="confirm">Xác nhận</button>
            </div>
        </form>
        <div class="left col-span-1">
            <div class="my-20 mx-10 space-y-4">
                <h3>DỊCH VỤ KHÁCH HÀNG</h3>
                <hr>
                <div class="flex space-x-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <label for="">0862381999</label>
                </div>
                <hr>
                <div class="flex space-x-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                    <label for="">Gửi email cho chúng tôi</label>
                </div>
            </div>
     
        </div>
    </div>
    <footer class="mt-10 mx-auto max-w-screen-2xl   py-10">
        <div class="f-on grid grid-cols-5 mx-10 items-center">
            <div class="col-span-2">
                <div class="flex items-center">
                    <img srcset="../upload/logo.png 2x" alt="" class="w-[80px] mx-4">
                    <h2 class="text-3xl ">Royal CenTer</h2>
                </div>
                <p class="mx-8 hover:underline my-6">But I must explain to you how all this mistaken idea of denouncing
                    pleasure and
                    praising pain was
                    born and I will give you</p>
                <div class="mx-8 my-4">
                    <input type="text" class="border-2 py-2 px-20 rounded-lg" required placeholder="Your email">
                    <button class="border-2 py-2 px-8 rounded-lg">Subscribe</button>
                </div>
            </div>
            <div class="col-span-1 mx-10">
                <h3 class="font-bold my-6">Platform</h3>
                <li class="list-none my-2 hover:underline"><a href="">Overview</a></li>
                <li class="list-none my-2 hover:underline"><a href="">Features</a></li>
                <li class="list-none my-2 hover:underline"><a href="">About</a></li>
                <li class="list-none my-2 hover:underline"><a href="">Pricing</a></li>
            </div>
            <div class="col-span-1">
                <h3 class="font-bold my-6">Help</h3>
                <li class="list-none my-2 hover:underline"><a href="">How does it work ?</a></li>
                <li class="list-none my-2 hover:underline"><a href="">Where to ask questions ?</a></li>
                <li class="list-none my-2 hover:underline"><a href="">How to pay</a></li>
                <li class="list-none my-2 hover:underline"><a href="">What is needed for this ?</a></li>
            </div>
            <div class="col-span-1">
                <h3 class="font-bold my-6">Contact</h3>
                <li class="list-none my-2 hover:underline"><a href="">(+98) 571-284</a></li>
                <li class="list-none my-2 hover:underline"><a href="">Hà Nội</a></li>
                <li class="list-none my-2 hover:underline"><a href="">Tòa nhà FPT Polytechnic</a></li>
                <li class="list-none my-2 hover:underline"><a href=""> P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà
                        Nội</a></li>
            </div>
        </div>
        <hr class="mx-20 my-10">
        <div class="mx-20 my-10 justify-between flex">
            <div class="">
                <p class="hover:underline">Copyright © 2022 · I'm Dyuu · </p>
            </div>
            <div class="flex space-x-10">
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-meta" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z" />
                    </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                        <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z" />
                        <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z" />
                    </svg></a>
            </div>
        </div>
    </footer>
</body>

</html>