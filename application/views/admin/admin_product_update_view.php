<div class="col-md-12">
    <h2>Please Update your product detail. </h2>
    <h4 style="color:red;">Product Name :  <?php echo $product->name  ?>  </h4>
</div>
<div class="col-md-7">

        <div class="form">
           <form id="pro-form" method="post" action="<?php echo base_url() ?>index.php/admin/update_product_child/<?php echo $id ?>">
             
             <select id="input_product_cat" name="input_product_cat" class="form-control chat-input">
                <option value="0">--Select a Product Catagory--</option>
                <?php foreach ($cat as $c) { ?>
                  <option value="<?php echo $c["id"]?>"
                          <?php $x = $c["id"] ; if($product->cata_id == $x){echo("selected");}?>>
                           <?php echo $c['name'] ?>
                  </option>
                <?php } ?>
             </select>
              
             <input type="text" value = "<?php echo $product->name  ?>"  size="100%" id="input_name" name="input_name" class="form-control chat-input" placeholder="Product name" />
              
            <textarea size="100%" value = "<?php echo $product->description ?>" rows="5" id="input_description" name="input_description" class="form-control chat-input" placeholder="description" /><?php echo $product->description ?></textarea>
              
             <input type="text" value = "<?php echo $product->price  ?>" size="100%" id="input_price" name="input_price" class="form-control chat-input" placeholder="Price" />
              

             <select id="input_condition"  name="input_condition" class="form-control chat-input">
                <option value="0" <?php if($product->condition == '0'){echo("selected");}?> >--Select Condition--</option>
                <option value="1" <?php if($product->condition == '1'){echo("selected");}?>>New</option>
                <option value="2" <?php if($product->condition == '2'){echo("selected");}?>>Used</option>
             </select>
              
             <input type="text" value = "<?php echo $product->quantity  ?>" size="100%" id="input_quantity" name="input_quantity" class="form-control chat-input" placeholder="quantity"/>
              
             <input type="text" value = "<?php echo $product->brand  ?>" size="100%" id="input_brand" name="input_brand" class="form-control chat-input" placeholder="brand"/>
              
             <input type="text" value = "<?php echo $product->country_manufacture  ?>" size="100%" id="input_country_manufacture" name="input_country_manufacture" class="form-control chat-input" placeholder="country manufacture"/>
              
             <select id="input_type" name="input_type" class="form-control chat-input">
                <option value="0" <?php if($product->auction == '0'){echo("selected");}?>>--Select Type--</option>
                <option value="1" <?php if($product->auction == '1'){echo("selected");}?>>Auction</option>
                <option value="2" <?php if($product->auction == '2'){echo("selected");}?>>Sell</option>
             </select>
              
             <input type="submit" value="Update" class="form-control btn btn-primary"/>
             <a href="<?php echo base_url()?>index.php/admin/product_list" class="form-control btn btn-success">Cancle</a> 
           </form>
        </div>
</div>
<div class="col-md-4 form">
    <h4>Select image to upload:</h4>
    <form action="<?php echo base_url() ?>index.php/admin/upload_image_by_id/<?php echo $id ?>" method="post" enctype="multipart/form-data">
        
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control chat-input">
        <input type="submit" value="Upload Image" name="submit" class="form-control btn btn-primary">
    </form>
      <?php foreach($productimg as $pi ) { ?> 
        <div class="admin-prod-image"> 
          <a href="<?php echo base_url()?>index.php/admin/delete_prod_image_by_id?<?php echo 'pim_id='.$pi->id.'&pid='.$pi->prod_id ?>" > <span class="glyphicon glyphicon-remove">
            <img src="<?php echo base_url() ?>public/img/products/<?php echo $pi->img ?>" class="img-responsive"> 
          </a>
        </div>
      
      <?php } ?>
</div>