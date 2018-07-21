


 
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <h1 class="form-c text-center">Login form</h1>
                    <hr>
            <div class="login-content">
                <?php echo $this->session->flashdata('login_msg'); ?>
                <div class="login-form">
                    <?php echo $this->session->flashdata('verify'); ?>
                    <?php echo $this->session->flashdata('info'); ?>
                    <?php echo $this->session->flashdata('info-msg'); ?>
                    
                    <form class="login-f" method="post" action="<?php echo base_url();?>Login/login_validation">
                        <div class="form-group">
                            <label>UserName</label>
                            <input type="text" class="form-control" placeholder="UserName" name="Username" value="<?php echo set_value('Username'); ?>">
                            <span class="text-danger"><?php echo form_error('Username'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name= "Password" class="form-control" placeholder="Password"  value="<?php echo set_value('Password'); ?>">
                            <span class="text-danger"><?php echo form_error('Password'); ?></span>
                        </div>
                        <!--<div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>-->
                        <div>
                            <label class="pull-right">
                                <a href="<?php echo base_url(); ?>register/reset">Reset Password</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

