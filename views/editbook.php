<?php $this->view('header'); ?>
<div class="col-md-9">
    <style type="text/css">
        input, select {
            border: 1px solid;
            margin-bottom: 10px;
            width: 80%;
        }
    </style>
    <form method="POST" action="<?php echo site_url('home/updatebook'); ?>" enctype="multipart/form-data">

        <div class="col-md-12" style="padding: 30px;">
            <?php foreach ($book

            as $info) { ?>
            <input type="hidden" name="bookid" value="<?php echo $info->id; ?>">
            <input type="hidden" name="subcat" value="<?php echo $info->catno; ?>">
            <input type="hidden" name="lastcat" value="<?php echo $info->subno; ?>">
            <div class="col-md-4" align="left">
                <p>Title</p>
                <input type="text" name="title" value="<?php echo $info->title; ?>">
                <p>Author</p>
                <input type="text" name="author" value="<?php echo $info->Author; ?>">
                <p>Publisher</p>
                <input type="text" name="publisher" value="<?php echo $info->Publisher; ?>">
                <p style="">Medium</p>
                <select name="medium">
                    <option value="0">English</option>
                    <option value="1">Hindi</option>
                </select>
                <p>Shipping Charges</p>
                <input type="text" name="charges" value="<?php echo $info->charges; ?>" />

            </div>
            <div class="col-md-4" align="left">
                <p>Cover Image</p>
                <input type="file" name="cover">
                <p>Backcover Image</p>
                <input type="file" name="backcover">
                <p>ISBN</p>
                <input type="number" name="isbn" value="<?php echo $info->ISBN; ?>">
                <p>Edition</p>
                <input type="number" name="edition" value="<?php echo $info->Edition; ?>">
                <p>Availability</p>
                <select name="avail">
                    <option value="1">In Stock</option>
                    <option value="0">Out of Stock</option>
                </select>

            </div>
            <div class="col-md-4">
                <p>Pages</p>
                <input type="number" name="pages" value="<?php echo $info->Pages; ?>"><br>
                <p>Select Binding</p>
                <select name="bind">
                    <option value="Hard Cover">Hard Cover</option>
                    <option value="PaperBack">PaperBack</option>
                </select><br>
                <p>MRP</p>
                <input type="number" name="mrp" value="<?php echo $info->MRP; ?>">
                <p>Discount</p>
                <input type="number" name="discount" value="<?php echo $info->Discount; ?>">
            </div>

        </div>
        <?php } ?>


        <br>
        <div class="col-md-12" align="center" style="margin-top: 55px;">
            <input type="submit" name="" value="ADD BOOK" style="width: 10%;">
        </div>


    </form>
</div>