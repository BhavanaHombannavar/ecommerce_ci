<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php echo base_url('admin/products/')?>">Manage Product</a></li>
    </ul>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Product</h2>
            </div>
            
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Qty</th>
                            <th>Publication SKU</th>
                            <th>Actions</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <?php 
                        $i=0;
                        foreach($get_all_product as $single_product){
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td class="center"><?php echo $single_product->product_title;?></td>
                            <td class="center"><img src="<?php echo base_url('uploads/'.$single_product->product_image);?>" style="width:200px;height:75px"/></td>
                            <td class="center"><?php echo $this->cart->format_number($single_product->product_price);?> Rs</td>
                            <td class="center"><?php echo $single_product->product_quantity;?></td>
                            <td class="center"><?php echo $single_product->product_sku;?></td>
                           <td class="center">

                                    <a class="btn btn-info" href="<?php echo base_url('admin/products/edit/' . $single_product->product_id); ?>">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo base_url('admin/products/delete/' . $single_product->product_id); ?>">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                        </tr>
                        <?php }?>
                        
                    </tbody>
                </table>            
            </div>
        </div><!--/span-->

    </div><!--/row-->



</div><!--/.fluid-container-->

<!-- end: Content -->