<body>
    <!-- banner -->
    <script src="<?php echo base_url('assets/js/responsiveslides.min.js'); ?>"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>  
    <div class="banner">	  
        <?php $this->load->view('templates/menu'); ?>
        <div class="slider">
            <div class="caption">
                <div class="container">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li><h3>Children must be taught how to think, not what to think.</h3></li>
                            <li><h3>Educating the mind without educating the heart is no education at all.</h3></li>	
                            <li><h3>Spoon feeding in the long run teaches us nothing but the shape of the spoon.</h3></li>	
                            <li><h3>The process of learning should be natural according to the age, ability and aptitude of the child.</h3></li>
                        </ul>	
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-grids">
            <div class="container">
                <div class="col-md-4 banner-grid">				 
                </div>
                <div class="col-md-4 banner-grid">

                </div>
                <div class="col-md-4 banner-grid">				
                    <h3>News Feed					
					<div style="float:right;">
						<button class="btn btn-danger up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
						<button class="btn btn-danger down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
						<button class="btn btn-success toggle"></button>
					</div>
					</h3>
                    <?php $this->load->view('templates/news'); ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---->
    <div class="welcome">
        <div class="container">                
            <div class="welcm_sec">
                <div class="col-md-12 campus">
                    <div class="campus_head">
                        <h3>Welcome</h3>
                        <p>Our school is situated far from the hustle and bustle of city life, surrounded by the peaceful mountains
                            terrian a really healthy and congenial atmosphere, plans to introduce a new concept and effective technique of education in English medium.</p>
                    </div>
                    <div class="col-md-3 wel_grid">
                        <img src="<?php echo base_url('assets/images/w1.jpg'); ?>" class="img-responsive" alt=""/>
                        <h5><a href="#">Our Infrastructure</a></h5>
                        <p>We continuously try to identify ways to improve student learning as measured on the high stakes standardized assessments mandated by the C.B.S.E .</p>
                    </div>                        
                    <div class="col-md-3 wel_grid">
                        <a href="<?php echo site_url('web/gallery'); ?>" style="border: #ffffff solid 0px"><img src="<?php echo base_url('assets/images/w4.jpg'); ?>" class="img-responsive" alt=""/></a>
                        <h5><a href="#">Photo Gallery</a></h5>
                        <p>Here you will find a large collection of some of our best photos to give you a a feel of our School.</p><p><br><a href="<?php echo site_url('web/gallery'); ?>" class="know-more">Know more</a></p>
                    </div>
                    <div class="col-md-3 wel_grid">
                        <?php if(count($activities)!=0){?>
                            <a href="<?php echo site_url('web/activities'); ?>" style="border: #ffffff solid 0px"><img src="<?php echo base_url('assets/images/w3.jpg'); ?>" class="img-responsive" alt=""/></a></p>
                        <?php } else { ?>
                            <a href="#" class="know-more"><img src="<?php echo base_url('assets/images/w3.jpg'); ?>" class="img-responsive" alt=""/></a></p>
                        <?php } ?>
                        <h5><a href="#">Student Activities</a></h5>
                        <p>It is a great pleasure to share activities conducted by our Kid's. A cool Place for Kids!</p><p><br>
                            <?php if(count($activities)!=0){?>
                                <a href="<?php echo site_url('web/activities'); ?>" class="know-more">Know more</a></p>
                            <?php } else { ?>
                                <a href="#" class="know-more">Know more</a></p>
                            <?php } ?>
                    </div>                        
                    <div class="col-md-3 wel_grid">
                        <?php if (count($bday) != 0) { ?>
                            <p>
                                <?php $this->load->view('templates/bday'); ?>
                            </p>
                        <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/t3.jpg'); ?>" class="img-responsive" alt="">
                            <h5><a href="#">Happy Birthday</a></h5>
                            <p align="center">No Birthday This Week.</p> 
                        <?php } ?>
                    </div>
                    <div class="clearfix"></div>                       
                </div>                    
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---->
    <div class="news">
        <div class="container">               
            <div class="event-grids">			
                <div class="col-md-6 event-grid">  
                    <div class="date">
                        <img src="<?php echo base_url('assets/images/t1.jpg'); ?>" class="img-responsive" alt=""/>
                    </div>                        
                    <div class="event-info">
                        <h5><a href="#">Manager's Message.</a></h5>
                        <p>Education is the most important part of a person's life. It not only modifies the animal instincts but also instils moral and ethical merits. It is the responsibility of the educational institutions to provide an atmosphere of freedom to each and every one irrespective of any discrimination. <a href="<?php echo site_url('web/messages'); ?>">Read more...</a></p>
                    </div>
                    <div class="clearfix"></div>				 			 
                </div>                    
                <div class="col-md-6 event-grid">  
                    <div class="date">
                        <img src="<?php echo base_url('assets/images/t1.jpg'); ?>" class="img-responsive" alt=""/>
                    </div>                        
                    <div class="event-info">
                        <h5><a href="#">Principal's Message.</a></h5>
                        <p>The Sunbeam Sr. Sec. School situated far from the hustle and bustle of city life, surrounded by the peaceful mountains terrain a really healthy and congenial atmosphere, plans to introduce a new concept and effective technique of education in English medium. <a href="<?php echo site_url('web/messages'); ?>">Read more...</a></p>
                    </div>
                    <div class="clearfix"></div>                    
                </div>
                <div class="clearfix"></div>	
            </div>
        </div>
    </div>        