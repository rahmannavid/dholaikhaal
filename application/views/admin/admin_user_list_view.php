<div class="col-md-12">
    <table class="table table-striped">
        <thead class="">
        <tr>
            <th> No </th>
            <th> User Name</th>
            <th> Email</th>
            <th> mobile</th>
            <th> User Type</th>
            <th> Address</th>          
        </tr>
        </thead>

        <tbody>
        <?php $x = 1 ; ?>
        <?php  foreach ($user as $c) { ?>
        <tr> 
            <td><?php                
                echo $x ;
                $x++ ;
                ?>
            </td> 
            <td> <?php echo $c['name'] ?></td>
            <td> <?php echo $c['email'] ?></td>
            <td> <?php echo $c['mobile'] ?></td>
            <td> <?php 
                    if ( $c['type']==1){
                        echo "Admin" ;
                    } 
                    else {
                        echo "User" ;
                    }
                 ?>
            </td>
            <td> <?php echo $c['address'] ?></td>
        </tr>
        <?php  } ?>
        </tbody>
    </table>
</div>