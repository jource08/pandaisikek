<!-- breadcam_area_start -->
<div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
    <div class="breadcam_inner">
        <div class="breadcam_text">
            <h3>Our Menu</h3>
            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p>
        </div>
    </div>
</div>
<!-- breadcam_area_end -->

<!-- order_area_start -->
<div class="order_area">
    <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Popular Orders</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
        <div class="row">

            <?php $i=0; foreach ($test as $key): ?>
                
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <?php if ($test[$i]['img_path'] != ''){
                            ?>
                            <img src="<?php echo $test[$i]['img_path'] ?>" alt="">
                        <?php
                        }else{
                            ?> 
                            <img src="assets/no-image.png" alt="">
                        <?php
                        } ?>
                        <div class="order_prise">
                            <span><?php echo number_format($test[$i]['harga'],0,',','.'); ?></span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#"><?php echo $test[$i]['nama_produk']; ?></a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                Weastern Pickle   |   Mixed Vegetable <br>
                                Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>

            <?php $i++; endforeach ?>

        </div>
    </div>
</div>
<!-- order_area_end -->