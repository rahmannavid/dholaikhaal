 <h1>Category</h1>
 <hr/>
 <div class="col-md-12">
    <form id="cat-form" class="form-inline" method="post" action="<?php echo base_url() ?>index.php/admin_category/add_category">
        <div class="form-group">
            <label for="category">Add New:</label>
            <input type="text" class="form-control" id="category" name="category">
            <input type="hidden" class="form-control" id="id" name="id">
        </div>
        <button type="submit" class="btn btn-default">Save</button>
        <button style="display: none;" type="button" class="btn btn-default" id="newbtn" onclick="add_new()">New</button>
    </form>
    <hr/>
</div>
 <div class="col-md-12">
    <table class="table table-striped">
        <thead class="">
        <tr>
            <th>Category</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
<?php foreach ($cat as $c) { ?>
        <tr>
            <td><?php echo $c['name'] ?></td>
            <td><a href="#" onclick="edit(<?php echo $c['id'] ?>,'<?php echo $c['name'] ?>')"><span class="glyphicon glyphicon-pencil"></span></a>
            &nbsp|&nbsp
            <a href="<?php echo base_url() ?>index.php/admin_category/delete_category/<?php echo $c['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
<?php } ?>        
        </tbody>
    </table>
  </div>

<script>
function edit(id, name)
{
    //document.cat-form.action = "<?php echo base_url() ?>index.php/admin_category/edit_category";
    $('#cat-form').attr('action',
                "<?php echo base_url() ?>index.php/admin_category/edit_category");
    $("#category").val(name);
    $("#id").val(id);
    $("#newbtn").show();
}

function add_new()
{
    //document.cat-form.action = "<?php echo base_url() ?>index.php/admin_category/edit_category";
    $('#cat-form').attr('action',
                "<?php echo base_url() ?>index.php/admin_category/add_category");
    $("#category").val('');
    $("#id").val('');
    $("#newbtn").hide();
}
</script>