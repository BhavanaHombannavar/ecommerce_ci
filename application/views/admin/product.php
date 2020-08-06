<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('admin/products/add')?>">Add Product</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
                <!-- <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div> -->
            </div>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Name</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="product_title" id="fileInput" type="text"/>
                                <?php echo form_error('product_title'); ?>
                            </div>
                        </div>          
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Image</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="product_image" id="fileInput" type="file"/>
                                <?php echo form_error('product_image'); ?>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Price</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="product_price" id="fileInput" type="text"/>
                                <?php echo form_error('product_price'); ?>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Quantity</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="product_quantity" id="fileInput" type="text"/>
                                <?php echo form_error('product_quantity'); ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product SKU</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="product_sku" id="fileInput" type="text"/>
                                <?php echo form_error('product_sku'); ?>
                            </div>
                        </div> 
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="save_product">Save changes</button>
                            <!-- <button type="reset" class="btn">Cancel</button> -->
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->