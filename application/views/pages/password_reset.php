


 
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <h1 class="form-c text-center">Reset Password here</h1>
                    <hr>
            <div class="login-content">
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="login-form">
                    <?php echo $this->session->flashdata('verify'); ?>
                    
                    <form class="login-f" method="post" action="<?php echo base_url();?>register/reset">
                        <div class="form-group">
                            <label>Enter Your Email Address</label>
                            <input type="email" class="form-control" placeholder="Your Email Address" name="email" value="<?php echo set_value('email'); ?>" required = true>
                        </div>
                       
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div