<?php $this->view('header'); ?>
<div class="col-md-9">
<?php 	foreach($orders as $row) { ?>
  <a href="<?php echo site_url('home/generateinvoice/').$row->OrderId; ?>"> 
   <div class="col-xs-12" style="background: #fff3a0; color:black; margin-bottom: 10px; margin-top: 10px; border-radius: 5px;">
    <div class="col-xs-12">
  <p style="font-family: Roboto Condensed; font-size: 20px;"><?php echo $row->Timestamp; ?></p>
    </div>
    <div class="col-xs-12">
    <p style="font-family: Roboto Condensed; font-size: 20px;"><?php echo $row->Name; ?></p>
    <p style="font-family: Roboto Condensed; font-size: 20px;"><?php echo $row->Address; ?></p>
  </div>
  </div>
</a>

<?php } ?>
</div>
