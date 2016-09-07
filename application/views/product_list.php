<div class="col-md-9">


                <div class="row">
                    <?php foreach($products as $p) { ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <?php if($p->img != null) { ?>
                            <div class="prod-img" style="background-image: url(<?php echo base_url() ?>public/img/products/<?php echo $p->img ?>);"></div>
                            
                            <?php } else { ?>
                            <div class="prod-img" style="background-image: http://placehold.it/300x200;"></div>
                            <?php } ?>
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $p->price ?></h4>
                                <h4><a href="#"><?php echo $p->name ?></a>
                                </h4>
                                <p><?php echo substr($p->description, 0, strpos($p->description, ' ', 130)) ?>...</p>
								 
							</div>
							<p class="button-pless"> 
								<a href="<?php echo site_url() ?>/product/<?php echo $p->id ?>" class="btn btn-default btn-thumb">More Info</a>
							</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>

     