<!DOCTYPE html>
<html>
<head>
	<title>GBD Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets\Datatables\DataTables-1.10.20\css\dataTables.bootstrap4.min.css'); ?>">
</head>
<body>
<div class="col-md-12" align="center">
	<p style="font-size: 30px;">GBD<sub>Admin</sub></p>
</div>
<div class="col-md-2">
	<a href="<?php echo site_url('home/orders'); ?>">Orders</a><br>
	<a href="<?php echo site_url('home/inventory') ?>">Inventory</a>
</div>

<div class="col-md-10">
	<a href="<?php echo site_url('home/addbook') ?>">Add Book</a>
	<table class="table table-responsive" style="margin-top: 50px;" id="table">
    <thead>
          <tr>
        <th>Book ID</th>
        <th>Cover</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Edition</th>
        <th>Pages</th>
        <th>Binding</th>
        <th>ISBN</th>
        <th>Medium</th>
        <th>MRP</th>
        <th>Discount</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($books as $book) { ?>
      <tr>
        <td><?php echo $book->id; ?></td>
        <td><img src="<?php echo base_url('assets/thumbnails/').$book->image; ?>" style="width: 100%;"></td>
        <td><?php echo $book->title; ?></td>
        <td><?php echo $book->Author; ?></td>
        <td><?php echo $book->Publisher;  ?></td>
        <td><?php echo $book->Edition; ?></td>
        <td><?php echo $book->Pages; ?></td>
        <td><?php echo $book->Binding; ?></td>
        <td><?php echo $book->ISBN; ?></td>
        <td><?php echo $book->Medium; ?></td>
        <td><?php echo $book->MRP; ?></td>
        <td><?php echo $book->Discount; ?></td>
        <td><i class="glyphicon glyphicon-wrench" style="cursor: pointer;" onclick="location.href='<?php echo site_url('home/editbook/').$book->id; ?>'" title="Edit book"></i> <i class="glyphicon glyphicon-trash" style="cursor: pointer" onclick="myFunction(<?php echo $book->id; ?>)" title="Delete Book"></i></td>
      </tr>
    <?php } ?>
    </tbody>

</table>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets\Datatables\DataTables-1.10.20\js\jquery.dataTables.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets\Datatables\DataTables-1.10.20\js\dataTables.bootstrap4.min.js') ?>"></script>
	<script>
		$(function(){
			$('#table').DataTable();
		});
	</script>
	<script type="text/javascript">
  function myFunction(id) {
  
  var r = confirm("Are you sure ?");
  if (r == true) {
    location.href='<?php echo site_url('home/deletebook/'); ?>'+id;
  } else {
    javascript:void(0);
  }
}
</script>
</div>
