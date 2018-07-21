
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
                        <a href="<?php echo base_url(); ?>dashboard/exclusive"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Alajo Sections</h3><!-- /.menu-title -->
                 
                    
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Funds Deposit</a> 
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bullseye"></i><a href="<?php echo base_url()?>dashboard/exclusivetargetsaver">Target Saver</a></li>
                            <li><i class="fa fa-rocket"></i><a href="<?php echo base_url()?>dashboard/fastsaver">Fast Saver</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                     <li>
                        <a href="<?php echo base_url()?>dashboard/withdraw"   aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Withdraw</a>
                    </li>
                    <li>
                        <a href="#"  aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Alajo Reference Package</a>
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
                      <h6><span class="badge badge-pill badge-success"><?php $name = $this->session->userdata('Fname'); echo $name ?> </span> Welcome to your Exclusive dashboard.</h6>

                      
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

                                <a class="nav-link" href="<?php echo base_url()?>login/logout"><i class="fa fa-power -off"></i>Logout</a>
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
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <h6>Kindly Fill Below Form To Start Your Savings, Set How Often You Want To Be Saving And Set Your Withdrawal Date.</h6>
                  <p style="color:red">Please <em>note</em> that the minimum period for saving on exclusive is 3months.</br> Any withdrawal within these period will attract a 7% discontuing fee</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        </div>

            <hr>

             <div class="col-lg-7 box alert alert-primary" role="alert">
                <h3 class="alajo-head text-center">Exclusive Target Saver</h3>
        
            
                      
<form method ="POST" action ="<?php echo base_url(); ?>dashboard/exclusiveTargetSaver" id = "formfield">
<input type="hidden" name="action" value="add_form" />
  <div class="form-group">
    <label for="frequency">Contribution Frequency</label>
    <select class ="form-control season" name ="frequency"  id ="Frequency" >
        <option value ="none">Choose Option</option>
        <option value ="Daily">Daily</option>
        <option value ="weekly">Weekly</option>
        <option value ="monthly">Monthly</option>
    </select>
    <span class="text-danger"><?php echo form_error('frequency'); ?></span>
  </div>
  <div class="form-group" id ="TOB" style ="display:none;">
    <label for="TimeOfdebit">Time Of Debit</label>
    <input type="text" class="form-control timeOfDebit" name = "TOB" id ="TOB" value="12:00 AM"  disabled="true">
     <span class="text-danger"><?php echo form_error('TOB'); ?></span>
  </div>
  <div class ="form-group" id ="week" style="display:none;">
      <label for ="days">Days of the week</label>
      <select class="form-control daysOfWeek" name="week" id ="week" >
          <option value=" ">Choose a day</option>
          <option value="monday">Monday</option>
          <option value="tuesday">Tuesday</option>
          <option value="wednesday">Wednesday</option>
          <option value="thrusday">Thursday</option>
          <option value="friday">Friday</option>
          <option value="saturday">Saturday</option>
          <option value="sunday">Sunday</option>
      </select>
  </div>
    <div class ="form-group" id="days" style="display:none;">
      <label for ="days">Day of the Month</label>
      <select class="form-control daysOfMonth" name="days" id="days">
          <option value=" ">Choose a day of the month</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
      </select>
  </div>
  
    <div class ="form-group" id ="month" style="display:none;">
      <label for ="month">Number Of Months</label>
      <select class="form-control duration" name="month" id ="month">
          <option value=" ">Choose Number Of Months</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
      </select>
  </div>
 
  
   <div class="form-group" id="Amount">
    <label for="Amount">Amount To Debit</label>
    <input type="number" class="form-control amountToSave" id="Amount" name = "amount"  value="<?php echo set_value('amount'); ?>"  placeholder="Amount To Debit" required>
    <span class="text-danger"><?php echo form_error('amount'); ?></span>
  </div>
  
   <div class="form-group">
    <label for="whenToWithdraw">When To Withdraw Savings</label>
    <input type="date" class="form-control" name="whenToWithdraw" id="whenToWithdraw" value="<?php echo set_value('whenToWithdraw'); ?>" placeholder="When to withdraw your savings" required>
    <span class="text-danger"><?php echo form_error('whenToWithdraw'); ?></span>
  </div>
  
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="emailAddress" name = "email"  value="<?php echo set_value('email'); ?>"  placeholder="Registered Email Address" required>
    <span class="text-danger"><?php echo form_error('email'); ?></span>
  </div>
 
  <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary" />
</form>



    <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                     Exclusive Target Savings Confirmation
                </div>
                <div class="modal-body">
                    Are you sure you want to submit the following details?
                    <table class="table">
                        <tr>
                            <th>Frequency</th>
                            <td id ="often"></td>
                        </tr>
                         
                        <tr>
                            <th>Time Of Debit</th>
                            <td id="debitTime"></td>
                        </tr>
                         <tr>
                            <th>Day Of The Week</th>
                            <td id="dow"></td>
                        </tr>
                         <tr>
                            <th>Day Of The Month</th>
                            <td id="dom"></td>
                        </tr>
                         <tr>
                            <th>Savings Duration</th>
                            <td id="sd"></td>
                        </tr>
                         <tr>
                            <th>Amount To Debit</th>
                            <td id="ad"></td>
                        </tr>
                         <tr>
                            <th>When To Withdraw</th>
                            <td id="wtw"></td>
                        </tr>
                         <tr>
                            <th>Email Address</th>
                            <td id="emailad"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    <a href="#" id="submit" class="btn btn-success">Submit</a>
                </div>
            </div>
        </div>
    </div>


<footer>
    
    <div class="tab-content col-lg-12">
    <div id="alajo" class="tab-pane fade">
      
    </div>
    <div id="Settings" class="tab-pane fade">
      
     
    </div>
</div>

</footer>
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
  
    
    
<script type="text/javascript">

   $('form').submit(function(e) {
    $(':disabled').each(function(e) {
        $(this).removeAttr('disabled');
    })
}); 


 $('#week').submit(function(e) {
    $(':required').each(function(e) {
        $(this).removeAttr('required');
    })
});
    



 $(document).ready(function () {
    toggleFields(); 
    $("#Frequency").change(function () {
        toggleFields();
    });

});


function toggleFields() {
    if ($("#Frequency").val() == "Daily")
        $("#TOB").show() && $("#month").show() && $("#week").hide() && $("#days").hide();
    else if ($("#Frequency").val() == "weekly")
        $("#TOB").show() && $("#month").show() && $("#week").show() && $("#days").hide();
    else if ($("#Frequency").val() == "monthly")
        $("#TOB").show() && $("#month").show() && $("#days").show() && $("#week").hide();
    else if ($("#Frequency").val() == "none")
        $("#TOB").hide() &&  $("#month").hide() && $("#days").hide() && $("#week").hide();
}


     $('#submitBtn').click(function() {
     $('#often').text($('.season').val());
     $('#debitTime').text($('.timeOfDebit').val());
     $('#dow').text($('.daysOfWeek').val());
     $('#dom').text($('.daysOfMonth').val());
     $('#sd').text($('.duration').val());
     $('#ad').text($('.amountToSave').val());
     $('#wtw').text($('#whenToWithdraw').val());
     $('#emailad').text($('#emailAddress').val());
});

$('#submit').click(function(){
    $('#formfield').submit();
});
 </script>
    
    



 
<!-- <form>
    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <button type="button" class="btn btn-primary" onClick="payWithRave()">Set Now</button>
</form>-->



</body>


</html>
