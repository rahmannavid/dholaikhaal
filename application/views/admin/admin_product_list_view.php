 <div class="col-md-12">
 <a href="<?php echo base_url()?>index.php/admin/products" class="form-control btn btn-success">Add New Product</a>
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
            <th> Action </th>
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

            <td><?php
                foreach ($product_category as $d) {
                    if ($d['id']== $c['cata_id']){                        
                            echo $d['name'] ; break ;
                    }
                }
                ?> 
            </td>    

            <td><?php echo $c['name'] ?></td>        
            <td><?php
                if (strlen($c['description']) > 130) 
                    echo substr($c['description'], 0, strpos($c['description'], ' ', 30)); 
                else
                    echo $c['description'];
                    ?>...
            </td>     
            <td><?php echo $c['price'] ?></td> 
            <td><?php if($c['condition'] == NewCondition) echo 'New'; else echo 'Used'; ?></td> 
            <td><?php echo $c['quantity'] ?></td> 
            <td><?php echo $c['brand'] ?></td> 
            <td><?php echo $c['country_manufacture'] ?></td> 
            <td><?php if ($c['auction'] == Auction) echo 'Auction'; else echo 'Sell' ?></td>   
            <td>
                <a href="<?php echo base_url() ?>index.php/admin/update_product/<?php echo $c['id'] ?>" ><span class="glyphicon glyphicon-pencil"></span></a>
                &nbsp|&nbsp
                <a href="<?php echo base_url() ?>index.php/admin/delete_product/<?php echo $c['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
    <?php } ?>        
        </tbody>
    </table>
  </div>