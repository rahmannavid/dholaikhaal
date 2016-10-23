
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

            <td><?php echo $c['pname']?> </td>    
            <td><?php echo $c['biding_price']?></td>        
            <td><?php echo $c['datetime'] ?></td>     
            <td><?php echo $c['name'] ?></td>  
            <td><?php echo $c['mobile'] ?></td> 
            <td><?php echo $c['address'] ?></td> 
            <td><?php echo $c['email'] ?></td> 
            <td><?php echo $c['comment'] ?></td> 
            <td><?php 
            
                    if ($c['status']==1) { echo '<span style="color:red;text-align:center; font-weight: bold;">Pending</span>'; }
                    else if ($c['status']==2) { echo '<span style="color:green;text-align:center;font-weight: bold;">Confirmed</span>'; }
                    else if ($c['status']==3) { echo '<span style="color:blue;text-align:center;font-weight: bold;">Delivered ✔</span>' ; }
                    else if ($c['status']==4) { echo '<span style="color:orange;text-align:center;font-weight: bold;">Declined</span>'; }

                ?>
            </td> 
            
        </tr>
    <?php } ?>        
        </tbody>
    </table>
  </div>
