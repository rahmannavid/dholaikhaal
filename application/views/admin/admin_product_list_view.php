 <div class="col-md-12">
    <table class="table table-striped">
        <thead class="">
        <tr>
            <th> No </th>
            <th> Product Category</th>
            <th> Product Name</th>
            <th> Description</th>
            <th> Price</th>
            <th> Condition</th>
            <th> Quantity</th>
            <th> Brand</th>
            <th> Country Manufacture</th>
            <th> Type </th>
        </tr>
        </thead>

        <tbody>
    <?php $x = 1 ; ?>
    <?php  foreach ($product_list as $c) { ?>
        <tr> 
            <td><?php                
                echo $x ;
                $x++ ;
                ?>
            </td>
            <td><?php echo $c['cata_id'] ?></td>
            <td><?php echo $c['name'] ?></td>        
            <td><?php echo $c['description'] ?></td>     
            <td><?php echo $c['price'] ?></td> 
            <td><?php echo $c['condition'] ?></td> 
            <td><?php echo $c['quantity'] ?></td> 
            <td><?php echo $c['brand'] ?></td> 
            <td><?php echo $c['country_manufacture'] ?></td> 
            <td><?php echo $c['auction'] ?></td>   
        </tr>
    <?php } ?>        
        </tbody>
    </table>
  </div>