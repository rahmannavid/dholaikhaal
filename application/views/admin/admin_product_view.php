<div class="col-md-4">

    <div class="row">
        <div class="col-md-offset-3">
        <div class="form-login">
            <h3>Welcome back Admin! <br/> Please insert your product detail. </h3>
           <br/>
           <form id="pro-form" class="form-inline" method="post" action="<?php echo base_url() ?>index.php/admin/products">
             <input type="text" size="100" id="input_name" name="input_name" class="form-control chat-input" placeholder="product name"/>
             <br/>
             <input type="text" size="100" id="input_description" name="input_description" class="form-control chat-input" placeholder="description"/>
             <br/>
             <input type="text" size="100" id="input_price" name="input_price" class="form-control chat-input" placeholder="price"/>
             <br/>
             <input type="text" size="100" id="input_condition" name="input_condition" class="form-control chat-input" placeholder="condition"/>
             <br/>
             <input type="text" size="100" id="input_quantity" name="input_quantity" class="form-control chat-input" placeholder="quantity"/>
             <br/>
             <input type="text" size="100" id="input_brand" name="input_brand" class="form-control chat-input" placeholder="brand"/>
             <br/>
             <input type="text" size="100" id="input_country_manufacture" name="input_country_manufacture" class="form-control chat-input" placeholder="country manufacture"/>
             <br/>
            
             <input type="submit" value="Submit" class="form-control btn btn-primary"/>
           </form>
           </div>
        </div>
    </div>
</div>