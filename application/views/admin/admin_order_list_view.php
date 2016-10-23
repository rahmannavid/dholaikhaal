
  <div class="col-md-12">   
        <form id="select_status"  method="post" action="<?php echo base_url() ?>index.php/place_order/select_status/">

                 <div class="col-md-12">
                     <h4> Select Status : </h4>
                  </div>
            <div class="col-md-4">
                <select id="input_condition_status"  name="input_condition_status" class="form-control chat-input">
                <option value="0" >--Select Status--</option>
                <option value="1" >Pending</option>
                <option value="2" >Confirmed</option>
                <option value="3" >Delivered</option>
                <option value="4" >Declined</option>
                </select>
            </div>
            <button style="width:auto;" class="btn btn-default"> Show </button>
        </form>
  </div>
 
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
            <td>
                <button onclick="update_order(<?php echo $c['id']?>)" style="width:auto;" class="btn btn-default"> Action </button>
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
      <input type="hidden" name="order_id" id="order_id" value=""/> 
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

function update_order(id)
{
    document.getElementById('id01').style.display='block';
    document.getElementById('order_id').value=id;
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