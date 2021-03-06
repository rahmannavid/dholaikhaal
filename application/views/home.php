<div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url() ?>public/img/banner1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url() ?>public/img/banner2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url() ?>public/img/banner1.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

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
                                <h4 class="pull-right">৳<?php echo $p->price ?></h4>
                                <h4><a href="<?php echo site_url() ?>/product/<?php echo $p->id ?>"><?php echo $p->name ?></a>
                                </h4>
                                <p><?php
                                if (strlen($p->description) > 130) 
                                  echo substr($p->description, 0, strpos($p->description, ' ', 130)); 
                                else
                                  echo $p->description;
                                 ?>...</p>
								 
							</div>
							<p class="button-pless"> 
								<a href="<?php echo site_url() ?>/product/<?php echo $p->id ?>" class="btn btn-default btn-thumb">More Info</a>
							</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>

     