

     <?php
     
    
      
        $frequency = $this->session->userdata('Frequency');
        $tob = $this->session->userdata('TOB');
        $month = $this->session->userdata('month');
        $dow = $this->session->userdata('Days_Of_Week');
        $dom = $this->session->userdata('Days_Of_Month');
        $amount = $this->session->userdata('Amount');
        $wd = $this->session->userdata('WhenToWithdraw');
        $email = $this->session->userdata('email');
        $Fullname = $this->session->userdata('Fname');
        $ref = $this->session->userdata('Username');
        $refcode = $ref . "-" . md5(date("Y/m/d"));

    ?>



<div class="container" style="margin-top:60px;">
  <h2 class="text-center">Regular Target Saver Data</h2>
  <h4 class="alert alert-success text-center"><?php $name = $this->session->userdata('Fname'); echo $name ?> , You have set the following.</h4>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>PLan</th>
        <th>Time Of Debit</th>
        <th>Day Of The Week</th>
        <th>Day Of The Month</th>
        <th>Amount To Save</th>
        <th>Withdraw Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo '<h4>' .   ucfirst( $frequency) . '</h4>' ; ?></td>
        <td><?php echo '<h4>' .  ucfirst( $tob) . '</h4>' ; ?></td>
        <td><?php echo '<h4>' .  ucfirst( $dow) . '</h4>' ; ?></td>
        <td><?php echo '<h4>' .  ucfirst( $dom) . '</h4>' ; ?></td>
        <td><?php echo '<h4>' . "N" . ucfirst( $amount) . '</h4>' ; ?></td>
        <td><?php echo '<h4>' .  ucfirst( $wd) . '</h4>' ; ?></td>
      </tr>
     
    </tbody>
  </table>
  </div>
 
  
  <form>
  
  <button type = "button" class="btn btn-success btn-lg" onClick="payWithRave()" style="margin-left:50%">Set Now</button>
</form>

</body>
<script>
 
    
    
    
    
</script>

</html>

