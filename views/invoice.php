<?php

foreach($data as $row)
{
    $items=explode(",", $row->Items);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goel Book Depot</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<h1 align="center">
    Goel Book Depot
</h1>
<p align="center">LOWER BAZAAR, SHIMLA 1</p>
<?php foreach($data as $row) { ?>
<p>Name: <?php echo $row->Name;  ?></p>
<p>Contact: <?php echo $row->Contact;  ?></p>
<p>Address: <?php echo $row->Address;  ?></p>
<p>Email: <?php echo $row->Email;  ?></p>
<p>Date/Time: <?php echo date('d-M Y H:i A ',strtotime($row->Timestamp)); ?></p>
<?php } ?>
<table class="table table-responsive">
    <tr>
        <th>Book Id</th>
        <th>Title</th>
        <th>Price</th>
    </tr>
    <?php foreach ($items as $key => $value) {
    $sql="SELECT * FROM books WHERE id=?";
    $query=$this->db->query($sql,$value);
    $result=$query->result();
    foreach($result as $row) { ?>
        <tr>
            <td><?php echo $row->id; ?></td>
           <td><?php echo $row->title; ?></td>
           <td><?php echo $row->MRP; ?></td>
        </tr>
        <?php
    }

}
?>
 <tr>
        <td></td>
        <TD><b>Delivery Charges</b></TD>
        <td>49</td>
    </tr>
    <tr>
        <td></td>
        <TD><b>Total</b></TD>
        <td><?php foreach($data as $row) {  echo $row->Total+49; }?></td>
    </tr>
</table>

<div>
    <button onclick="window.print()">Print</button>
    </div>
    
</body>
</html>