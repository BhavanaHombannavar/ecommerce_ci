

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Your Shipping Address</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/save/shipping/address');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Enter Your Name">
                                </div>


                                <div>
                                    <input type="text" name="shipping_city" placeholder="Enter Your City">
                                </div>
                                <div>
                                    <input type="text" name="shipping_phone" placeholder="Enter Your Phone">
                                </div>
                            </td>
                            <td>
                                
                                 <div>
                                    <input type="text" name="shipping_zipcode" placeholder="Enter Your ZipCode">
                                </div>       

                                <div>
                                    <input type="text" name="shipping_address" placeholder="Enter Your Address">
                                </div>
                                
                                <div>
                                    <select id="country" name="shipping_country" class="frm-field required">
                                        <option value="null">Select a Country</option>         
                                        <option value="India">India</option>

                                    </select>
                                </div>		

                                
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Submit</button></div></div>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>