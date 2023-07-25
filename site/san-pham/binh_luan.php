<div class="detail-pro-review">
    <h1 class="detail-pro-review-title text-2xl">Nhận xét đánh giá</h1>
    <?php
    foreach ($danh_sach_bl as $dsbl) {
        extract($dsbl);
    ?>
        <br>

        <div class="detail-pro-user-review">
            <div class="detail-pro-user-rate">
                <span class="detail-pro-date"><?= $ngay_bl ?></span>
                <div class="detail-pro-user-stars">
                    <?php
                    for ($i = 1; $i <= $stars; $i++) {
                        echo "<span class='fa fa-star detail-pro-user-icon'></span>";
                    }
                    ?>
                </div>
                <span class="detail-pro-user-info">by <?= $user_name ?></span>
            </div>
            <p class="detail-pro-user-commet">
                <?= $comment ?>
            </p>
        </div>

    <?php
    }
    ?>
    <?php
    $check = false;
    $id_product = $pro['id'];

    if (isset($_SESSION['id_user'])) {
        $order = checkcomment($_SESSION['id_user']);
        foreach ($order as $order) {
            if ($id_product == $order['id_product']) {
                $check = true;
                break;
            }
        }
    }

    if (isset($_SESSION['dangky']) && ($check == true)) {
        $id = $_SESSION['id_user'];
        $order = loadall_order($id);
        echo '
                <form action="" method="post" enctype="multipart/form-data" class="detail-pro-form">
                <div class="flex space-x-2">
                    <h3 class="detail-pro-rate-title">Đánh giá sản phẩm:</h3>
                    <div class="detail-pro-star space-x-2">
                        <input type="radio" id="star5" name="stars" value="5" />
                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
    
                        <input type="radio" id="star4" name="stars" value="4" />
                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
    
                        <input type="radio" id="star3" name="stars" value="3" />
                        <label class="full" for="star3" title="Meh - 3 stars"></label>
    
                        <input type="radio" id="star2" name="stars" value="2" />
                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
    
                        <input type="radio" id="star1" name="stars" value="1" />
                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                    </div>
                </div>
    
                <div class="">
                <h3 class="my-4">Viết bình luận bạn tại đây</h3>
                <textarea class="border-2 border-black w-full" name="comment" id="comment" cols="30" rows="10" placeholder="Viết bình luận của bạn tại đây ..."></textarea>
            </div>
                <button class="bg-black my-8 rounded-2xl text-white py-3 text-2xl font-semibold px-8" name="btn_insert">Đăng tải bình luận</button>';
    } else {
        echo "<a>Bạn phải mua hàng mới được đánh giá</a>";
    }
    ?>

    </form>

</div>
<!-- End detail product review -->