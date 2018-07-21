
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
                        <a href="#"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                     <li>
                        <a href="#"   aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Alajo Sections</a>
                    </li>
                    
                   <!-- <h3 class="menu-title">Alajo Sections</h3><!-- /.menu-title -->
                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Account Types</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="#">Regular Account</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="#">Exclusive Accounts</a></li>
                            <li><i class="fa fa-bars"></i><a href="#">Group Accounts</a></li>
                            
                        </ul>
                    </li>-->
                     <li>
                        <a href="#"   aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Withdraw</a>
                    </li>
                    <li>
                        <a href="#"  aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Alajo Reference Package</a>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li>
                        <a data-toggle="tab" href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bell"></i>Notifications</a> 
                       
                    </li>
                    <li>
                        <a data-toggle="tab" href="#"> <i class="menu-icon ti-email"></i>Your Alajo Package</a>
                    </li>
                    
                    
                    <li>
                        <a data-toggle="tab" href="#alajo"> <i class="menu-icon fa fa-bar-chart"></i>General Settings</a>
                    </li>
                    
                    
                    
                    
                    
                   <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>General Settings</a>
                         <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="#">Edit Profile</a></li>
                            <li><i class="fa fa-credit-card"></i><a href="#">Edit Card Details</a></li>
                            <li><i class="fa fa-check-circle-o"></i><a href="#">Change Password</a></li>
                            <li><i class="fa fa-bank"></i><a href="#">Change Withdrawal Bank</a></li>
                            
                        </ul>
                        
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
                 <?php 
                 
                 //$fname = $this->session->userdata('Fname');
                // if(!isset($fname)){
        
                 //redirect('Login/index');
                 //}
                    //$email = $this->session->userdata('email');
                     $fname = $this->session->userdata('Fname');
                     
                     echo ("<strong><em> Welcome, $fname.</em></strong>");
                     
                 ?>
                 
                 <?php
                     $email = $this->session->userdata('email');
                     $code  = $this->session->userdata('Username');
                     $reference = $code . "-" . md5(date("Y/m/d"));
                     
                  ?>
                  
                   <?php
      if(!isset($fname))
      {
          redirect('Login');
      }
      
      ?>
                     
               

                      
                    </div>
    </div>
                
              

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>assets/images/admin.jpg" alt="user">
                        </a>
                        <span><a class="nav-link" href="<?php echo base_url(); ?>Login/logout"><i class="fa fa-power -off"></i>Logout</a></span>
                            

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">0</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                        </div>
                    </div>
                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

      

        <div class="content mt-3">

            <!--<div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success"><?php $name //= //"Charles"; echo $name ?> </span> Good Afternoon, Welcome to your Setup dashboard.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>-->
           
           
            <!--<div class="col-sm-12">
                <p>This is your initial commitment to alajo.com.ng.  We call this fund your "setup fund".</p>
                <strong>First Step:</strong><h5>Enter the bank account number you will like to securely withdraw your savings to.</h5>
                <p></p>
                <strong>Final Step:</strong><p>You will be able to set exactly how you want to save. This includes the amount, frequency & target.</p>

                <button class="btn btn-medium btn-success">Save N500</button>
            </div>-->

<div class="container col-md-8">
  <div class="jumbotron">
   <p> <h5>This is your activation fee towards your intended contribution with alajo.com.ng.</h5> </p>    
    <p>This funds gives you access to the following and more.</p>
    <ul class="list-group">
        <li class="list-group-item list-group-item-info">Set your daily, weekly or monthly contribution</li>
        <li class="list-group-item list-group-item-success">Set your mode of contribution</li>
        <li class="list-group-item list-group-item-info">Set your withdrawal date</li>
        <li class="list-group-item list-group-item-success">Edit your profile</li> 
    </ul>

    <p>You will be able to set exactly how you want to save. This includes the amount, frequency & target.</p>
        
    
    	
    
<form>
   
  <button type="button" class="btn btn-info btn-lg"  role="button" style="cursor:pointer; border-radius: 10px" value="Pay Now" id="submit"  onClick="payWithRave()">Save <s>N</s>500</button>
</form>


  </div>

 
                  

 

</body>





   <script src="<?php echo base_url() ?>assets/admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/widgets.js"></script>
</html>
