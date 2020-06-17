<?php $this->view('header'); ?>
<div class="col-md-9">
    <?php foreach ($subjects as $subject) { ?>
        <p><?php echo $subject->name; ?>
            <span onclick="myFunction(<?php echo $subject->id; ?>)" class="glyphicon glyphicon-trash" style="cursor: pointer" title="Delete"></span></p>
        <br>
    <?php } ?>

    <form method="POST" action="<?php echo site_url('home/newSubject') ?>">
        <p>Add New Subject</p>
        <input type="text" name="subject" required >
        <input type="hidden" value="<?php echo $class; ?>" name="class">
        <br><br>
        <button>Add New Subject</button>
    </form>

</div>
<script type="text/javascript">
    function myFunction(id) {

        var r = confirm("Are you sure ?");
        if (r == true) {
            location.href='<?php echo site_url('home/deletesubject/'); ?>'+id;
        } else {
            javascript:void(0);
        }
    }
</script>