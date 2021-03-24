<div class="col-md-12">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
								<p align=center>ANDROID SUPER SIMAS</p>
                                    <img class="slide-image"  style="height: 300px;background :red"src="<?=$url?>images/slide/default.png" alt="">
                                </div>
								
								<?php
								$r=mysql_query("select * from slider order by id_slide desc limit 0,3");
								
								while($r1=mysql_fetch_object($r))
								{?>
                                <div class="item">
									<p align=center style="background :rgba(137, 121, 121, 0.56)"><?=$r1->caption?></p>
                                    <img class="slide-image"  style="height: 300px;"src="<?=$url?>images/slide/<?=$r1->path?>" alt="<?=$r1->path?>">
                                </div>
                                <?php }?>
                                
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>