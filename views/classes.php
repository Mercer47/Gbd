<?php $this->view('header'); ?>
<div class="col-md-9">
    <?php foreach ($classes as $class) { ?>
        <a href="<?php echo site_url('home/loadClass/').$class->id; ?>"><?php echo $class->name; ?></a>
        <span onclick="myFunction(<?php echo $class->id; ?>)" class="glyphicon glyphicon-trash" style="cursor: pointer" title="Delete"></span>
        <br><br>
    <?php } ?>

    <form method="POST" action="<?php echo site_url('home/newclass') ?>">
        <p>Add New Class</p>
        <input type="text" name="class" required >
        <input type="hidden" value="<?php echo $category; ?>" name="category">
        <br><br>
        <button>Add New Class</button>
    </form>

</div>

<script type="text/javascript">
    function myFunction(id) {

        var r = confirm("Are you sure ?");
        if (r == true) {
            location.href='<?php echo site_url('home/deleteclass/'); ?>'+id;
        } else {
            javascript:void(0);
        }
    }
</script>
