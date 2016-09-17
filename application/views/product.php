  <div class="col-md-9">
                
				<div class="col-md-4 " >
					<div class="row">
						<div class="flexslider">
							  <ul class="slides">
                                <?php foreach($productimg as $pi ) { ?>  
								<li data-thumb="<?php echo base_url() ?>public/img/products/<?php echo $pi->img ?>">
									<div class="thumb-image"> <img src="<?php echo base_url() ?>public/img/products/<?php echo $pi->img ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<?php } ?>
								
							  </ul>
						</div>
					
					</div>
							
				</div>
				
				<div class="col-md-8">
                
					<div class="row">

					<div class="thumbnail">
					   
						<div class="caption-full">
							<h2 class="pull-right">Tk.<?php echo number_format($product->price, 2, '.', ',') ?></h2>
							<h3><a href="#"><?php echo $product->name ?></a>
							</h3>
							<p><?php echo $product->description ?></p>
							<p class="button-pless">
                  <?php if($product->auction == Auction) { ?>  
								  <a href="<?php echo site_url() ?>/place_order/form/<?php echo $product->id ?>" class="btn btn-success p-button">Make A Bid</a>
                  <? } else { ?>
                  <a href="<?php echo site_url() ?>/place_order/form/<?php echo $product->id ?>" class="btn btn-primary p-button">Buy Now</a> 
                  <?php } ?>
							</p>	
						</div>
					</div>
					</div>

				</div>
                
				<div class="row">
                    <div class="col-md-12">
                        <div class="product-detail">
                                <h4>Details</h4>
                            
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <tbody>
                                  <tr>
                                    <td class="col-md-2">Condition</td>
                                    <td class="col-md-1">:</td>
                                    <td class="col-md-7"><?php if($product->condition == 1) echo 'New'; else echo 'Used'; ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-2">Quantity</td>
                                    <td class="col-md-1">:</td>
                                    <td class="col-md-7"><?php echo $product->quantity ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-2">Brand</td>
                                    <td class="col-md-1">:</td>
                                    <td class="col-md-7"><?php echo $product->brand ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-2">Country Manufacture</td>
                                    <td class="col-md-1">:</td>
                                    <td class="col-md-7"><?php echo $product->country_manufacture ?></td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>