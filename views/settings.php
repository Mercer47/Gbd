<?php $this->view('header') ?>

    <div class="col-md-9">
        <p>Categories</p>
            <?php foreach ($category as $row) { ?>
                <a href="<?php echo site_url('home/loadcategory/').$row->id; ?>"><?php echo $row->name; ?></a>
                <span onclick="myFunction(<?php echo $row->id; ?>)" class="glyphicon glyphicon-trash" style="cursor: pointer" title="Delete"></span>
                <br><br>
            <?php } ?>

        <br>
        <form method="POST" action="<?php echo site_url('home/newcategory') ?>">
            <p>Add New Category</p>
            <input type="text" required name="category">
            <br><br>
            <button>Add New Category</button>
        </form>

    </div>
<script type="text/javascript">
    function myFunction(id) {

        var r = confirm("Are you sure ?");
        if (r == true) {
            location.href='<?php echo site_url('home/deletecategory/'); ?>'+id;
        } else {
            javascript:void(0);
        }
    }
</script>
