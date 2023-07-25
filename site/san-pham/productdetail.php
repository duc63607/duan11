<?php
if (!is_array($pro)) {
    echo 'Sản Phẩm Không Tồn Tại';
} else {

    $id = $pro['id'];
    $pr_name = $pro['product_name'];

    $pr_price = $pro['product_price'];
    $pr_price_sale = $pro['product_price_sale'];
    $pr_description = $pro['description'];
    $pr_origin = $pro['origin']; // $pro['origin'];
    $image = $pathimg . $pro['image'];
    $image2 = $pathimg . $pro['image2']; //$pro['pr_image2'];//
    $image3 = $pathimg . $pro['image3']; // $pro['pr_image3'];//
    /*if (is_file($pr_image1)) $pr_image1 = '<img src="' . $pr_image1 . '" alt="">';
    else $pr_image1 = '';
    if (is_file($pr_image2)) $pr_image2 = '<img src="' . $pr_image2 . '" alt="">';
    else $pr_image2 = "";
    if (is_file($pr_image3)) $pr_image3 = '<img src="' . $pr_image3 . '" alt="">';
    else $pr_image3 = "";*/
}
?>
<hr class="my-10">
<div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-5 ">
        <div class="col-span-3">
            <div class="bg-[#F3F3F5] mb-4"><img src="<?= $image ?>" alt=""></div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-[#F3F3F5]">
                    <img src="<?= $image2 ?>" alt="">
                </div>
                <div class="bg-[#F3F3F5]">
                    <img src="<?= $image3 ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-span-2 ml-20">
            <div class="flex justify-between items-center my-4">
                <h2 class="font-semibold"><?= $pr_name ?></h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
            </div>
            <form action="index.php?act=addtocart" method="post">
                <p class="text-[red] text-[16px] my-4" for=""><?php echo isset($_SESSION['thongbao']) ? $_SESSION['thongbao'] : " " ?></p>
                <div class="color flex space-x-6 items-center mt-6">
                    <h3 class="">Color: </h3>
                    <input type="radio" name="colors" value="yellow" id="yellow">
                    <label for="yellow" class="yellow rounded-lg"><img src="" alt=""></label>
                    <input type="radio" name="colors" value="green" id="green">
                    <label for="green" class="green rounded-lg"></label>
                    <input type="radio" name="colors" value="black" id="black">
                    <label for="black" class="black rounded-lg"></label>
                    <input type="radio" name="colors" value="pink" id="pink">
                    <label for="pink" class="pink rounded-lg"></label>
                    <input type="radio" name="colors" value="cyan" id="cyan">
                    <label for="cyan" class="cyan rounded-lg"></label>
                </div>
                <hr class="my-4 w-[80%] mx-auto">
                <div class="size flex space-x-6 items-center ">
                    <h3>Size: </h3>
                    <div class=" space-x-4">
                        <input type="radio" name="size" value="S" id="S">
                        <label for="S" class="S rounded-lg">S</label>
                        <input type="radio" name="size" value="M" id="M">
                        <label for="M" class="M rounded-lg">M</label>
                        <input type="radio" name="size" value="L" id="L">
                        <label for="L" class="L rounded-lg">L</label>
                        <input type="radio" name="size" value="XL" id="XL">
                        <label for="XL" class="XL rounded-lg">XL</label>
                    </div>

                </div>
                <hr class="my-4 w-[80%] mx-auto">
                <span class="block my-4 text-[12px] text-gray-600">Reference: M1286ZRIW_M928</span>
                <div class="bg-[#F6F6F6] px-4 py-4">

                    <div class="flex justify-between items-center">
                        <div class="flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                            <h2 class="mx-4  text-[14px] font-bold">Personalize your product</h2>
                        </div>
                        <span class=" text-[10px] font-semibold">Free</span>
                    </div>
                    <p class="text-[10px] my-2">Add your own signature embroidery with your name or initials, a lucky
                        number
                        or symbol of the
                        House</p>
                </div>
                <p class="text-center font-bold mt-10"><?= $pr_price ?> VNĐ</p>

                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="product_name" value="<?= $pr_name ?>">
                <input type="hidden" name="image" value="<?= $image2 ?>">
                <input type="hidden" name="product_price" value="<?= $pr_price ?>">
                <input type="submit" class="py-3 mt-4 w-full bg-black text-white rounded-lg" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
            </form>
            <p class="mt-10 text-[10px] text-center">By placing your order you agree to the terms of service. Please
                note,
                shipping to US
                Territories is
                not available.</p>
            <span class="text-[10px] flex items-center my-4 text-gray-600  hover:underline">Receive as
                soon as November
                21 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle mx-4" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
            </span>
            <div class="text-[12px] border-2 border-gray-200 py-2 px-4 my-4 ">
                <div class="flex items-center my-4 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    <span class="mx-3">Availability in boutiques</span>
                </div>
                <div class="flex items-center my-4 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <span class="mx-3">Liên hệ với chúng tôi 0862381550</span>
                </div>
                <div class="flex items-center my-4 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span class="mx-3">Find a boutique</span>
                </div>
            </div>
            <div class="bg-[#F6F6F6] px-6 py-6 space-y-4">
                <div class="flex justify-between">
                    <span class="font-semibold text-[12px]">DESCRIPTION</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                    </svg>
                </div>
                <p class="text-[10px]"><?= $pr_description ?></p>

                <li class="text-[12px]">Dust bag included</li>
                <li class="text-[12px]"><?= $pr_origin ?></li>
                <span class="text-[10px]">* Exclusive customization service available in select stores</span>
                <hr>

                <div class="flex justify-between">
                    <span class="font-semibold text-[12px]">SIZE & FIT</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
                <hr>

                <div class="flex justify-between">
                    <span class="font-semibold text-[12px]">DELIVERY & RETURN</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <HR class="my-20">
    </HR>
    <?php
    include "binh_luan.php";
    ?>
    <h3 class="text-center">SUGGESTIONS</h3>
    <div class="grid grid-cols-4 gap-10 mx-auto">

        <?php
        foreach ($sugget as $sg) {
            extract($sg);
            $linksp = "index.php?act=productdetail&id=" . $id;
            $image2 = $img_path . $image2;
            echo '
               
            <a href="' . $linksp . '" class="px-2 text-gray-600">
            <div class="my-10">
            <img src="' . $image2 . '" alt="" class="bg-[#F3F3F3] mx-auto w-[184px] h-[184px]">
            <h3 class="text-gray-600 my-4 text-center">' . $product_name . '</h3>
            <div class="flex mx-auto text-[14px] text-center">
                <span class="ml-8">' . $product_price . ' VNĐ</span>
                
                <button class="ml-4 hover:border-2 border-gray-200">+ Add To Cart </button>
            </div>
            </div>
            </a>
        ';
        }
        ?>

    </div>

</div>