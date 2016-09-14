<div class="col-md-7">

        <div class="form-login">
            <h3>Please insert your product detail. </h3>
           <br/>
           <form id="pro-form" class="form" method="post" action="<?php echo base_url() ?>index.php/admin/add_product">
             
             <select id="input_product_cat" name="input_product_cat" class="form-control chat-input">
                <option value="0">--Select a Product Catagory--</option>
                <?php foreach ($cat as $c) { ?>
                  <option value="<?php echo $c["id"] ?>"><?php echo $c['name'] ?></option>
                <?php } ?>
             </select>
             <br/>
             <input type="text" size="100%" id="input_name" name="input_name" class="form-control chat-input" placeholder="product name"/>
             <br/>
             <textarea size="100%" rows="5" id="input_description" name="input_description" class="form-control chat-input" placeholder="description"/></textarea>
             <br/>
             <input type="text" size="100%" id="input_price" name="input_price" class="form-control chat-input" placeholder="price"/>
             <br/>

             <select id="input_condition" name="input_condition" class="form-control chat-input">
                <option value="0">--Select Condition--</option>
                <option value="1">New</option>
                <option value="2">Used</option>
             </select>
             <br/>
             <input type="text" size="100%" id="input_quantity" name="input_quantity" class="form-control chat-input" placeholder="quantity"/>
             <br/>
             <input type="text" size="100%" id="input_brand" name="input_brand" class="form-control chat-input" placeholder="brand"/>
             <br/>
             <input type="text" size="100%" id="input_country_manufacture" name="input_country_manufacture" class="form-control chat-input" placeholder="country manufacture"/>
             <br/>
             <select id="input_type" name="input_type" class="form-control chat-input">
                <option value="0">--Select Type--</option>
                <option value="1">Sell</option>
                <option value="2">Auction</option>
             </select>
             <input type="submit" value="Submit" class="form-control btn btn-primary"/>
           </form>
        </div>
</div>
