<img src="../upload/banner3.jpg" alt="" class="max-w-screen-2xl rounded-lg mx-auto">
<div class="max-w-6xl mx-auto grid grid-cols-4 gap-8 mt-24 ">
    <div class="col-span-1">
        <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Danh mục sản phẩm</h2>
        <div class="space-y-4">
            <!-- <label for="">Quần áo</label><select name="" id="" class="">
            </select><br>
            <label for="">Giày</label><select name="" id=""></select><br>
            <label for="">Túi</label><select name="" id=""></select><br>
            <label for="">Ví</label><select name="" id=""></select><br>
            <label for="">Phụ kiện</label><select name="" id=""></select><br> 
        -->
            <ul>
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=san_pham&iddm=" . $id;
                    echo '
                        <li class="my-1">
                        <a href="' . $linkdm . '">' . $categories_name . '</a>
                        </li>
                    ';
                }
                ?>
            </ul>
        </div>


        <div class="">
            <h2 style="font-family: 'Courier New', Courier, monospace" ; class="my-4 font-black text-xl">Sản phẩm nổi bật
            </h2>

            <?php
            foreach ($sptop10 as $dssp) {
                extract($dssp);
                $linksp = "index.php?act=productdetail&id=" . $id;
                $image2 = $img_path . $image2;
                echo '
                <div class="flex my-4 items-center ml-2">
                <img srcset="' . $image2 . ' " alt="" class="w-[135px] h-[135px] ">
                <div class="text-[12px] text-center">
                    <a href="' . $linksp . '" class="px-2 text-gray-600">' . $product_name . '</a>
                    <div class="flex">
                        <span class="ml-8 my-2">' . $product_price . ' VNĐ</span>
                    </div>
                </div>
            </div>
                ';
            }
            ?>
        </div>
    </div>
    <div class="my-4 col-span-3 ">
        <div class="flex justify-between mb-10">
            <span class="text-gray-600 ">Đang hiển thị <?= $san_pham ?> kết quả</span>
            <div class="text-center">
                <select name="" id="" class="">
                    <option value="" class="text-gray-600 ">Bộ lọc</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10">
            <?php
            //  echo print_r($ds_san_pham);
            //  die();
            foreach ($danh_sach_sp_moi as $dssp) {
                extract($dssp);
                $image2 = $img_path . $image2;
            ?>
                <div class="">
                    <a href="index.php?act=productdetail&id= <?php echo $id ?>">
                        <div class="">
                            <div class="bg-[#F3F3F3]  w-[259px] h-[259px]">
                                <img src=" <?= $image2 ?> " alt="" class="w-[259px] h-[259px] hover:bg-white hover:shadow-lg hover:shadow-cyan-500/50 hover:text-[#4F46E5]">
                            </div>
                            <h3 class="text-gray-600 my-2"> <?= $product_name  ?></h3>
                            <div class="flex">
                                <span><?= $product_price ?> VNĐ</span>
                    </a>

                    <form action="index.php?act=addtocart" method="post">
                        <div class="page-wrapper">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="product_name" value="<?= $product_name ?>">
                            <input type="hidden" name="image" value="<?= $image2 ?>">
                            <input type="hidden" name="product_price" value="<?= $product_price ?>">
                            <form action="index.php?act=addtocart" method="post">
                                <input id="addtocart" type="submit" name="addtocart" value="Add to Cart" class="flex gap-4 mx-4 hover:border-2 border-gray-200">


                                </input>


                        </div>
                    </form>
                </div>
        </div>
    </div>
<?php } ?>

</div>



</div>
</div>
<hr class="max-w-6xl mx-auto ">
<div class="max-w-6xl mx-auto flex justify-between my-10 " style="font-family: 'Courier New', Courier, monospace" ;>
    <div class="">
        <?php
        for ($i = 1; $i <= $_SESSION['total_page']; $i++) {
        ?>
            <a href="index.php?act=san_pham&page=<?= $i ?>" class="border-gray-200 border-2 px-2 py-1 text-gray-600 <?= $_SESSION['page'] == $i ? 'product-page-active' : '' ?>"><?= $i ?></a>
        <?php
        }
        ?>

    </div>
    <span class="text-gray-600">Đang hiển thị <?= $san_pham ?> kết quả</span>
</div>
<div class="text-center bg-gray-100 py-10 mt-10 mb-20" style="font-family: 'Courier New', Courier, monospace" ;>
    <h2 class="font-bold text-3xl">
        Nhận thông tin giảm giá
    </h2>
    <p class=" mt-5 mb-6">
        Đăng ký đặt hàng Royal để nhận ưu đãi hấp dẫn, đăng ký nhận nhiều thông tin giảm giá hấp dẫn
    </p>
    <div class=" font-bold my-5">
        <button class="border-2 text-black border-black px-3 py-3">
            Tìm hiểu thêm
        </button>
        <button class="border-2 text-black border-black px-5 py-3 bg-white-900">
            Đặt mua
        </button>
    </div>
</div>