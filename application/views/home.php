<div class="main">
    <div class="content">

        <div class="content_bottom">
            <div class="heading">
                <h3>Our Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php foreach ($all_new_products as $single_new_product) { ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo base_url('single/' . $single_new_product->product_id); ?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/' . $single_new_product->product_image) ?>" alt="" /></a>
                    <h2><?php echo $single_new_product->product_title; ?></h2>
                    <p><span class="price"><?php echo $this->cart->format_number($single_new_product->product_price); ?> Rs</span></p>
                    <div class="button"><span><a href="<?php echo base_url('single/product/' . $single_new_product->product_id); ?>" class="details">Details</a></span></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>