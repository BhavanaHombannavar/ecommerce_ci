

<div class="main">
    <div class="content">
        <div style="margin: 0 auto">
        <div class="login_panel">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('messagelogin'); ?></p>
            </div>
            
            <form action="<?php echo base_url('customer/shipping/login');?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text"/>
                <input name="customer_password" placeholder="Enter Your Password" type="password"/>
                <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                <div class="buttons"><div><button class="grey">Sign In</button></div></div>
            </form>
        </div>
        <div class="register_account">
            <h3>Register New Account</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/shipping/register');?>">
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
                    </tbody></table> 
                <div class="search"><div><button class="grey">Create Account</button></div></div>
                <div class="clear"></div>
            </form>
        </div>  	
        </div>
        <div class="clear"></div>
    </div>
</div>