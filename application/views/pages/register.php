


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            
            <div class="login-content">
                <h1 class="form-c text-center">Registration form</h1>
                    <hr>
              <form class="login-f" method="post" action="<?php echo base_url(); ?>index.php/register">
                <div class="login-form">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <?php echo $this->session->flashdata('verify'); ?>
                          <div class="form-group">
                            <label for="Fname">Full Name</label>
                            <input type="text" name= "Fname"
                             class="form-control" placeholder="Full Name" id="Fname" value="<?php echo set_value('Fname'); ?>">
                            <span class="text-danger"><?php echo form_error('Fname'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="Username">User Name</label>
                            <input type="text" name= "Username"
                             class="form-control" placeholder="User Name" id="Username" value="<?php echo set_value('Username'); ?>">
                            <span class="text-danger"><?php echo form_error('Username'); ?></span>
                        </div>
                      
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name = "email" class="form-control" placeholder="Email" id="email" value="<?php echo set_value('email'); ?>">
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>

                         <div class="form-group">
                            <label for="Phone">Phone Number</label>
                            <input type="text" class="form-control" name= "Phone" placeholder="Phone Number" pattern="\d*" id="Phone" value="<?php echo set_value('Phone'); ?>">
                            <span class="text-danger"><?php echo form_error('Phone'); ?></span>
                        </div>
                       <div class="form-group">
                            <label for="Plan">Choose a product</label>
                            <select class="form-control" name="Plans" id="Plans" required>
                                <option value = "none">Choose a Plan</option>
                            	<option value="Regular">Regular Plan (No Interest)</option>
                            	<option value="Exclusive">Exclusive Plan (With Interest)</option>
                            </select>
                            <span class="text-danger"><?php echo form_error('Plans'); ?></span>
                        </div>
                         <div class="form-group">
                            <label for="Next_kin">Next Of Kin</label>
                            <input type="text" class="form-control" name= "Name" placeholder="Enter name of Next Of Kin" id="Name" value="<?php echo set_value('Name'); ?>">
                            <span class="text-danger"><?php echo form_error('Name'); ?></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="KPhone">Next Of Kin Phone Number</label>
                            <input type="text" class="form-control" name= "KPhone" placeholder="Enter Next Of Kin's Phone Number" pattern="\d*" id="KPhone" value="<?php echo set_value('KPhone'); ?>">
                            <span class="text-danger"><?php echo form_error('KPhone'); ?></span>
                        </div>
                           <div class="form-group">
                            <label for="relationship">Relationship With Next Of Kin</label>
                            <select class="form-control" name="relationship" id="relationship" required>
                                <option value =" ">Choose Relationship</option>
                            	<option value="wife">Wife</option>
                            	<option value="Husband">Husband</option>
                            	<option value="Father">Father</option>
                            	<option value="Mother">Mother</option>
                            	<option value="Brother">Brother</option>
                            	<option value="Sister">Sister</option>
                            	<option value="Other">Other</option>
                            </select>
                            <span class="text-danger"><?php echo form_error('relationship'); ?></span>
                        </div>
                          
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" value="<?php echo set_value('Password'); ?>">
                            <span class="text-danger"><?php echo form_error('Password'); ?></span>
                        </div>
                         <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="cpassword" id="cpassword" value="<?php echo set_value('cpassword'); ?>">
                            <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                        </div>
                        <!--<div class="form-group">
                            <label for="image">Upload Your Photo</label>
                            <input class="form-control" type="file" name="userfile" id="userfile"  >
                            <span class="text-danger"><?php //echo form_error('userfile');?></span>
                            
                        </div>-->
                       <div class="alert alert-success">
                            <h5>By Clicking on Register Button, you agree to terms and conditions.</h5>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="register">Register</button>
                        <div class="social-login-content">
                            
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="<?php echo base_url() ?>login"> Sign in</a></p>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>






