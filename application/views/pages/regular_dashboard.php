
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
                        <a href="<?php echo base_url();?>dashboard/regular"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Alajo Sections</h3><!-- /.menu-title -->
                
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Funds Deposit</a> 
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bullseye"></i><a href="<?php echo base_url()?>dashboard/regulartargetsaver">Target Saver</a></li>
                            <li><i class="fa fa-rocket"></i><a href="<?php echo base_url()?>dashboard/fastsaver">Fast Saver</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url()?>dashboard/withdraw"   aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Withdraw</a>
                    </li>
                    <li>
                        <a href="reference.php"  aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Alajo Reference Package</a>
                    </li>

                    <h3 class="menu-title"></h3><!-- /.menu-title -->

                    <li>
                        <a data-toggle="tab" href="#"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bell"></i>Notifications</a> 
                       
                    </li>
                    <li>
                        <a data-toggle="tab" href="#"> <i class="menu-icon 	fa fa-briefcase"></i>Your Alajo Package</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>General Settings</a>
                        
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
                     <h6><span class="badge badge-pill badge-success"><?php $name = $this->session->userdata('Fname'); echo $name ?> </span>  Welcome to your Regular dashboard.</h6>
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

                                <a class="nav-link" href="<?php echo base_url(); ?>Login/logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        
         <?php
      if(!isset($name))
      {
          redirect('Login');
      }
      
      ?>

      
<div class="content mt-3">

            <div class="col-sm-12">
               <!-- <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success"><?php //$name = $this->session->userdata('Fname'); echo $name ?> </span>  Welcome to your dashboard.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
            </div>



        


           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <button class="btn bg-transparent  text-light" type="button" id="">
                                <i class="fa fa-bank pull-right"></i>
                                <h4 class="text-center"></h4>
                                <span class="icon">Current Savings</span>
                            </button>
                            
                        </div>
                        <!--<h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>-->

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!--<canvas id="widgetChart1"></canvas>-->
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <button class="btn bg-transparent  text-light" type="button" id="" >
                                <i class="fa fa-group"></i>
                                <span class="icon">Group Savings</span>
                            </button>
                           
                        </div>
                       <!-- <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>-->

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!--<canvas id="widgetChart2"></canvas>-->
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent  text-light" type="button" id="">
                                <i class="fa fa-money"></i>
                                <span class="icon">Loans</span>
                            </button>
                            
                        </div>
                        <!--<h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>-->

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                           <!-- <canvas id="widgetChart4"></canvas>-->
                        </div>

                    </div>
                </div>
            </div>

            
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <button class="btn bg-transparent text-light" type="button" id="" >
                                <i class="fa fa-link"></i>
                                <span class="icon">Referals</span>
                            </button>
                           
                        </div>
                      

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                           <!-- <canvas id="widgetChart4"></canvas>-->
                        </div>

                    </div>
                </div>

            </div>
        </div>


            <hr>

             <div class="col-sm-12 box alert alert-dark" role="alert">
                <h4 class="alajo-head">Target Saver</h4>
                <p class="my-txt">Allows you to auto save funds from your choosen bank account</p>
               <a class="btn btn-lg btn-success my-btn" role ="button" href ="<?php echo base_url(); ?>dashboard/regulartargetsaver"> Click To Start</a>
            </div> 
            <hr>
             <div class="col-sm-12 box alert alert-dark">
                <h4 class="alajo-head">Fast Saver</h4>
                <p class="my-txt">Allows you to add loose funds anytime to your Ajo account. This can only be done after target saver is set.</p>
                
                <a class="btn btn-lg btn-success my-btn" role ="button" href ="<?php echo base_url(); ?>dashboard/fastsaver">Add Loose Funds Now</a>

            </div> 
            
             <div class="col-sm-12 box alert alert-dark">
                <h4 class="alajo-head">Upgrade to exclusive</h4>
                <p class="my-txt">Earn up to 4.5% in 3months on your contributions with exclusive account</p>
                
                <a class="btn btn-lg btn-success my-btn" role ="button" href ="#">Add Loose Funds Now</a>

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
