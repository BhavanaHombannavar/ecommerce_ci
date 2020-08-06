

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Register New Account</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/save');?>">
                <table>
                    
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Enter Your Name" value="<?php echo set_value('customer_name'); ?>">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Enter Your Password" value="<?php echo set_value('customer_password'); ?>">

                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="Enter Your Phone"  value="<?php echo set_value('customer_phone'); ?>">
                                </div>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Enter Your Email" value="<?php echo set_value('customer_email'); ?>">
                                </div>      
                            </td>
                        </tr> 
                    </tbody>
                </table> 
                <div class="search"><div><button class="grey">Create Account</button></div></div>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>