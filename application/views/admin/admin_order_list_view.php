
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
            <th> Action</th>
            
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

            <td><?php echo $c['name']?> </td>    
            <td><?php echo $c['biding_price']?></td>        
            <td><?php echo $c['datetime'] ?></td>     
            <td><?php echo $c['name'] ?></td>  
            <td><?php echo $c['mobile'] ?></td> 
            <td><?php echo $c['address'] ?></td> 
            <td><?php echo $c['email'] ?></td> 
            <td><?php echo $c['comment'] ?></td> 
            <td><?php echo $c['status'] ?></td> 
            <td>
            <?php echo $c['id']?>   
                <button onclick="update_order()" style="width:auto;"> ADD </button>
            </td>
            
        </tr>
    <?php } ?>        
        </tbody>
    </table>
  </div>

<div id="id01" class="modal">
  
  <form id="st_form" class="modal-content animate" method="post" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <div class="col-md-9">
      <br> 
      <label><b>Status</b></label>
      <br>  
      <select id="input_condition"  name="input_condition" class="form-control chat-input">
                <option value="0" >--Select Status--</option>
                <option value="1" >Pending</option>
                <option value="2" >Confirmed</option>
                <option value="3" >Delivered</option>
                <option value="4" >Declined</option>
       </select>
      <br>  
      <label><b>Comments</b></label>
      <textarea size="auto" width: auto; rows="5" id="input_description" name="input_description" class="form-control chat-input" placeholder="description"/></textarea>
      <button onclick="check_empty()" type="submit">Submit</button>
       
      </div>
      <br>
    </div>
  </form>
</div>

<script>

function update_order()
{
    document.getElementById('id01').style.display='block';
    
}
function check_empty()
{
    if (document.getElementById('input_condition').value == "" || document.getElementById('input_description').value == "") {
        alert("Fill All Fields !");
        } else {
          $('#st_form').attr('action',"<?php echo base_url() ?>index.php/place_order/update_order/");
        }
}
  
// Get the modal
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>