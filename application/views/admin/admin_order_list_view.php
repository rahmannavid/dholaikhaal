 <div class="col-md-12">
    <table class="table table-striped">
        <thead class="">
        <tr>
            <th> No </th>
            <th> Product Name</th>
            <th> Biding Price</th>
            <th> Date of Order</th>
            <th> User Name</th>
            <th> User Mobile No</th>
            <th> User Address</th>
            <th> User Email</th>
            <th> Comment</th>
            <th> Status</th>
            
        </tr>
        </thead>

        <tbody>
    <?php $x = 1 ; ?>
    <?php  foreach ($order_list as $c) { ?>
        <tr> 
            <td><?php                
                echo $x ;
                $x++ ;
                ?>
            </td> 

            <td><?php
                foreach ($product_list as $d) {
                    if ($d['id']== $c['product_id']){                        
                            echo $d['name'] ; break ;
                    }
                }
                ?> 
            </td>    

            <td><?php echo $c['biding_price'] ?></td>        
            <td><?php echo $c['datetime'] ?></td>     
            <td><?php echo $c['name'] ?></td>  
            <td><?php echo $c['mobile'] ?></td> 
            <td><?php echo $c['address'] ?></td> 
            <td><?php echo $c['email'] ?></td> 
            <td><?php echo $c['comment'] ?></td> 
            <td><?php echo $c['status'] ?></td> 
             
            
        </tr>
    <?php } ?>        
        </tbody>
    </table>
  </div>