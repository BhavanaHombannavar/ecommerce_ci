

<div class="main">
    <div class="content">
        <div class="section group">
            <div class="cont-desc span_1_of_2">             
                <div class="grid images_3_of_2">
                    <img src="<?php echo base_url('uploads/'.$get_single_product->product_image)?>" alt="" />
                </div>
                <div class="desc span_3_of_2">
                    <h2><?php echo $get_single_product->product_title?></h2>
                    <div class="price">
                        <p>Price: <span><?php echo $this->cart->format_number($get_single_product->product_price)?> Tk</span></p>
                    </div>
                    <div class="add-cart">
                        <form action="<?php echo base_url('save/cart');?>" method="post">
                            <input type="number" class="buyfield" name="qty" value="1"/>
                            <input type="hidden" class="buyfield" name="product_id" value="<?php echo $get_single_product->product_id?>"/>
                            <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                        </form>             
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
