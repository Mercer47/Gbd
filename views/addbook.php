<?php $this->view('header'); ?>
<div class="col-md-9">
    <style type="text/css">
        input, select {
            border: 1px solid;
            margin-bottom: 10px;
            width: 80%;
        }
    </style>
    <form method="POST" action="<?php echo site_url('home/insertbook'); ?>" enctype="multipart/form-data">

        <div class="col-md-12" style="padding: 30px;">
            <div class="col-md-4" align="left">
                <p>Category</p>
                <select name="main" id="main">
                    <option>Select a Category</option>
                    <?php foreach ($category as $row) { ?>
                        <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                    <?php } ?>
                </select>
                <p>Title</p>
                <input type="text" name="title">
                <p>Author</p>
                <input type="text" name="author">
                <p>Publisher</p>
                <input type="text" name="publisher">
                <p style="">Medium</p>
                <select name="medium">
                    <option value="0">English</option>
                    <option value="1">Hindi</option>
                </select>
                <p>Shipping Charges</p>
                <input type="text" name="charges" />

            </div>
            <div class="col-md-4" align="left">
                <p>Subcategory</p>
                <select name="subcat" id="subcat">
                    <option>Select a Category first</option>
                </select>
                <p>Cover Image</p>
                <input type="file" name="cover">
                <p>Backcover Image</p>
                <input type="file" name="backcover">
                <p>ISBN</p>
                <input type="number" name="isbn">
                <p>Edition</p>
                <input type="number" name="edition">
            </div>
            <div class="col-md-4">
                <p>Class</p>
                <select name="lastcat" id="lastcat">
                    <option>Select a Subcategory first</option>
                </select>
                <p>Pages</p>
                <input type="number" name="pages"><br>
                <p>Select Binding</p>
                <select name="bind">
                    <option value="Hard Cover">Hard Cover</option>
                    <option value="PaperBack">PaperBack</option>
                </select><br>
                <p>MRP</p>
                <input type="number" name="mrp">
                <p>Discount</p>
                <input type="number" name="discount">
            </div>

        </div>


        <br>
        <div class="col-md-12" align="center" style="margin-top: 55px;">
            <input type="submit" name="" value="ADD BOOK" style="width: 10%;">
        </div>


    </form>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#main").on("change", function () {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "<?php echo site_url('home/selection') ?>",
                        type: "POST",
                        data: "id=" + id,
                        success: function (html) {
                            $("#subcat").html(html);
                            $("#lastcat").html("<option>Select sub category first</option>");
                        }
                    });
                } else {
                    $("#subcat").html("<option>Select category first</option>");
                    $("#lastcat").html("<option>Select sub category first</option>");
                }
            });

            $("#subcat").on("change", function () {
                var subID = $(this).val();
                if (subID) {
                    $.ajax({
                        url: "<?php echo site_url('home/selection') ?>",
                        method: "POST",
                        data: "subid=" + subID,
                        success: function (html) {
                            $("#lastcat").html(html);
                        }
                    });
                } else {
                    $("#lastcat").html("<option>Select sub category first</option>");
                }
            });

        });
    </script>
</div>