
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
                        <a href="<?php echo base_url();?>dashboard/withdraw"   aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Withdraw</a>
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
                      <h6><span class="badge badge-pill badge-success"><?php $name = $this->session->userdata('Fname'); echo $name ?> </span>  Welcome to Fast Saver.</h6>

                      
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

                                <a class="nav-link" href="<?php echo base_url();?>login/logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

         <?php
     /* if(!isset($name))
      {
          redirect('Login');
      }*/
      
      ?>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <h6>Fast saver allows you to add loose funds anytime to your Ajo account. Use any of below secured options to add funds.</h6>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>



        </div>


        
          

            <div class=" col-lg-7 box alert alert-dark fast-saver ">
                <h5 class="alajo-head text-center"> </h5>
                <p class="my-txt text-center">Use the default card already connected to your Ajo account.</p>
                
                <button class="btn btn-md btn-success my-btn" >Use default card</button>

            </div>
            
             
            <div class=" col-lg-7 box alert alert-dark fast-saver">
               
              <p class="my-txt text-center">Use a new debit or credit card to add funds to your Ajo account.</p>
                
              <button class="btn btn-md btn-success my-btn" >Use new card</button>
            
            
            </div>
            
            <div class=" col-lg-7 box alert alert-dark fast-saver">
                
                <p class="my-txt text-center">Use a bank account number to add funds to your Ajo account.</p>
                
              <button class="btn btn-md btn-success my-btn" >Use account number</button>
            
            
            </div>
            
          
           
        
            
       
           

                      
             

                  
        
    
    <div class="tab-content col-lg-12">
    <div id="alajo" class="tab-pane fade">
      <h3></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="Settings" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>
  
    <!-- Right Panel -->

    <script src="<?php echo base_url() ?>assets/admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/widgets.js"></script>

</body>
</html>
