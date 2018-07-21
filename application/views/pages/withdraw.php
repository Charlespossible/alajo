
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-tabs">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo"></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-tabs">
                    <li class="active">
                        <a href="<?php echo base_url() ?>dashboard/exclusive"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Alajo Sections</h3><!-- /.menu-title -->
                    
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Funds Deposit</a> 
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bullseye"></i><a href="<?php echo base_url();?>dashboard/exclusivetargetsaver">Target Saver</a></li>
                            <li><i class="fa fa-rocket"></i><a href="<?php echo base_url();?>dashboard/fastsaver">Fast Saver</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                     <li>
                        <a href="<?php echo base_url();?>dashboard/withdraw "   aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Withdraw</a>
                    </li>
                    <li>
                        <a href="reference.php"  aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Alajo Reference Package</a>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li>
                        <a data-toggle="tab" href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bell"></i>Notifications</a> 
                       
                    </li>
                    <li>
                        <a data-toggle="tab" href="#alajo"> <i class="menu-icon 	fa fa-briefcase"></i>Your Alajo Package</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#Settings" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>General Settings</a>
                        
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
            
   

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <div class="header-left">
                     <span class="badge badge-pill badge-success"><?php $name = $this->session->userdata('Fname'); echo $name ?> </span>  Welcome to Withrawal dashboard.

                      
                    </div>
                </div>
                        
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>assets/images/admin.jpg" alt="user">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">0</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="<?php echo base_url() ?>login/logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
         
                

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <h6 style="font-size: 15px;">Please note, withdrawing on our free withdrawal dates and your set withdrawal dates are <span style="text-transform:uppercase;">free. </span> This is to help your savings and make your contributions easy. </br> Below are our four free withdrawal dates in a year. </br>
                  <span style="color:red">1st Free withdrawal date of the year : 31st March. </br> 2nd Free withdrawal date of the year : 1st July. </br> 3rd Free withdrawal date of the year : 1st October. </br>4th Free withdrawal date of the year : 31st December.</span> </br> </h6>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>



        </div>


        
           

            <hr>

             <div class="col-lg-7 box alert alert-light" role="alert">
                <h3 class="alajo-head text-center">Withdraw Savings</h3>
                <p>Withdraw your savings here and it will be transferred into your set bank account.</p>
         
             
          <form method ="post" action ="<?php echo base_url(); ?>dashboard/withdraw" id = "formfield">
              
   <div class="form-group">
    <label for="email">Alajo Email Address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Alajo Address Here"
  </div>
  
  <div class="form-group">
    <label for="amount">How Much Do You Want To Withdraw</label>
    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter withdrawal value"
  </div>
  <div class="form-group">
    <label for="BankName">Choose Your Bank</label>
    <select class="form-control" name="BankName" id="Bankname">
        <option value=" ">Choose Your Bank</option>
        <option value="Access">Access Bank</option>
        <option value="citibank">Citibank</option>
        <option value="diamond">Diamond Bank</option>
        <option value="ecobank">Ecobank Bank</option>
        <option value="Enterprise">Enterprise Bank</option>
        <option value="fidelity">Fidelity Bank</option>
        <option value="fbn">First Bank</option>
        <option value="gtb">Guaranty Trust Bank</option>
        <option value="heritage">Heritage Bank</option>
        <option value="keystone">Keystone Bank</option>
        <option value="Mainstreet">Mainstreet Bank</option>
        <option value="Skye">Skye Bank</option>
        <option value="Stanbic">Stanbic IBTC Bank</option>
        <option value="Standard">Standard Chartered Bank</option>
        <option value="Sterling">Sterling Bank</option>
        <option value="SunTrust">SunTrust Bank</option>
        <option value="Union">Union Bank</option>
        <option value="UBA">UBA</option>
        <option value="Unity">Unity Bank</option>
        <option value="Wema">Wema Bank</option>
        <option value="Zenith">Zenith Bank</option>
    </select>
  </div>
  
   <div class="form-group">
    <label for="Amount">Account Name</label>
    <input type="text" class="form-control" id="accountname" name="accountname" placeholder="Correct Account Name">
  </div>
  
  <div class="form-group">
    <label for="Amount">Account Number</label>
    <input type="number" class="form-control" id="Acctnumber" name= "accountnumber" placeholder="Correct Account Number">
  </div>
  
  <div class="form-group">
    <label for="Amount">For Proper Authentication, please enter your alajo password here</label>
    <input type="password" class="form-control" id="pwd" name= "pwd" placeholder="please enter your password here">
  </div>
   
  <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary" />
</form> 

<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Withdrawal  Confirmation
                </div>
                <div class="modal-body">
                    
                    
                 <?php
                    $value = $this->session->userdata('WhenToWithdraw');
                   
                    $today =  date("Y/m/d");
                    if($value == $today){
                        
                        echo "Congratulations, Today is your set Withdrawal date";
                    }
                    
                    else{
                        
                        echo "Today is neither a free nor your set Withdrawal date, You will be charged 7% if you go ahead to initiate withdrawal. Click submit to continue";
                    }

                ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    <a href="#" id="submit" class="btn btn-success">Submit</a>
                </div>
            </div>
        </div>
    </div>
                  
        
    
    <div class="tab-content col-lg-12">
    <div id="alajo" class="tab-pane fade">
      <h3></h3>
      
    </div>
    <div id="Settings" class="tab-pane fade">
      
    </div>
</div>
  
    <!-- Right Panel -->

    <script src="<?php echo base_url() ?>assets/admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/widgets.js"></script>
     <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    
    
    <script>
        
     $('#submitBtn').click(function() {
     $('#often').text($('.season').val());
     
});

$('#submit').click(function(){
    $('#formfield').submit();
});
    </script>

</body>
</html>
