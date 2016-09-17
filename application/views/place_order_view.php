<div class="col-md-9">
    
         
        <h3>Please Confirm Your Order </h3>
        
    <div class="col-md-12 well">

            <?php 
            if (isset($productimg->img))
            if($productimg->img != null) { ?>
            <div class="prod-img" style="background-image: url(<?php echo base_url() ?>public/img/products/<?php echo $productimg->img ?>);"></div>
            
            <?php } else { ?>
            <div class="prod-img" style="background-image: http://placehold.it/300x200;"></div>
            <?php } ?>
            <div>
                
                <h4><a href="<?php echo site_url() ?>/product/<?php echo $product->id ?>"><?php echo $product->name ?></a>
                </h4>
                <h4>Price : <?php echo $product->price ?></h4>
                <p><?php echo $product->description ?></p>
            </div>
    </div>
    <div class="form">
    <h3>Billing Informations</h3>
    **You can change the information befor submit the order
        <form id="order-form" method="post" action="<?php echo base_url() ?>index.php/place_order/add_order">
            
            <input type="hidden" id="input_id" name="input_id" value="<?php echo $user->id ?>"/>
            <input type="hidden" id="input_prod_id" name="input_prod_id" value="<?php echo $product->id ?>"/>
            <input type="text" size="100%" id="input_name" name="input_name" class="form-control chat-input" placeholder="name" value="<?php echo $user->name ?>" required/>
            <input type="text" size="100%" id="input_mobile" name="input_mobile" class="form-control chat-input" placeholder="mobile" value="<?php echo $user->mobile ?>" required/>
            <input type="text" size="100%" id="input_address" name="input_address" class="form-control chat-input" placeholder="address" value="<?php echo $user->address ?>" required/>
            <input type="text" size="100%" id="input_email" name="input_email" class="form-control chat-input" placeholder="email" value="<?php echo $user->email ?>" required/>
            
            <?php if($product->auction == Auction) { ?>   
                <b style="color: #03c8ca;"> Last Bid : <?php echo $lastbid ?> </b>   
                <input type="number" size="100%" id="input_price" name="input_price" class="form-control chat-input" placeholder="your biding price" required/>
            <?php } ?>
            
            <input type="submit" value="Submit" class="form-control btn btn-primary"/>
            <a href="<?php echo base_url()?>" class="form-control btn btn-success">Cancle</a>  
        </form>
    </div>
</div>