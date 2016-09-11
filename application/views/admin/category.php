 <h1>Category</h1>
 <hr/>
 <div class="col-md-12">
    <form class="form-inline">
        <div class="form-group">
            <label for="category">Add New:</label>
            <input type="text" class="form-control" id="category">
        </div>
        <button type="submit" class="btn btn-default">Save</button>
    </form>
    <hr/>
</div>
 <div class="col-md-12">
    <table class="table table-striped">
        <thead class="">
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
<?php foreach ($cat as $c) { ?>
        <tr>
            <td><?php echo $c['id'] ?></td>
            <td><?php echo $c['name'] ?></td>
            <td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
            &nbsp|&nbsp
            <a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
<?php } ?>        
        </tbody>
    </table>
  </div>
