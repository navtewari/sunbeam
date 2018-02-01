    <body>
        <!-- banner -->
        <script src="<?php echo base_url('assets/js/responsiveslides.min.js');?>"></script>
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
            <?php $this->load->view('templates/menu');?>
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
                        <h3>News Feed</h3>
                        <div class="banner-grid-sec">
                            <div class="news-grid">
                                <h4><a href="#">Vivamus tempus ligula</a></h4>
                                <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                            </div>
                            <div class="news-grid">
                                <h4><a href="#">Vivamus tempus ligula</a></h4>
                                <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                            </div>
                            <div class="news-grid">
                                <h4><a href="#">Vivamus tempus ligula</a></h4>
                                <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                            </div>
                            <div class="news-grid">
                                <h4><a href="#">Vivamus tempus ligula</a></h4>
                                <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                            </div>
                        </div>
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
                            <img src="<?php echo base_url('assets/images/w1.jpg');?>" class="img-responsive" alt=""/>
                            <h5><a href="#">Our Infrastructure</a></h5>
                            <p>We continuously try to identify ways to improve student learning as measured on the high stakes standardized assessments mandated by the C.B.S.E .</p>
                        </div>
                        <div class="col-md-3 wel_grid">
                            <img src="<?php echo base_url('assets/images/w3.jpg');?>" class="img-responsive" alt=""/>
                            <h5><a href="#">Kid's Corner</a></h5>
                            <p>It is a great pleasure to share stuff created by our Kid's. A cool Place for Kids! Hang out and play some games or maybe find that site for your latest homework project.</p>
                        </div>
                        <div class="col-md-3 wel_grid">
                            <img src="<?php echo base_url('assets/images/w2.jpg');?>" class="img-responsive" alt=""/>
                            <h5><a href="#">Our Toppers</a></h5>
                            <p>Success can’t be achieved by words, to achieve success one has to plan and work hard. This is the strategy we follow in Sparkle Academy.</p>
                        </div>
                        <div class="col-md-3 wel_grid">
                            <img src="<?php echo base_url('assets/images/w4.jpg');?>" class="img-responsive" alt=""/>
                            <h5><a href="#">Photo Gallery</a></h5>
                            <p>Here you will find a large collection of some of our best photos to give you a peek at some of our amazing infrastructure, a sense of the activities within</p>
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
                    <div class="col-md-8 event-grid">  
                        <div class="date">
                            <img src="<?php echo base_url('assets/images/t1.jpg');?>" class="img-responsive" alt=""/>
                        </div>                        
                        <div class="event-info">
                            <h5><a href="#">Principal's Message.</a></h5>
                            <p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at, 
                                volutpat et orci. Aliquam eu tellus orci.</p>	
                            <p><br><a href="#">Read more...</a></p>
                        </div>
                        <div class="clearfix"></div>				 			 
                    </div>                    
                    <div class="col-md-4 event-grid">
                        <div class="date">
                            <h4><?php echo date("d");?></h4>
                            <span><?php echo date("m/Y");?></span>
                            <img src="<?php echo base_url('assets/images/t1.jpg');?>" class="img-responsive" alt="" style="max-height:100px;margin-left:5%;"/>
                        </div>				 
                        <div class="event-info">
                            <h5><a href="#">Happy Birthday</a></h5>                            
                            <p>Wishing you a Happy Birthday. May GOD bless you all the days you live.</p>				
                        </div>
                        <div class="clearfix"></div>				 			 
                    </div>
                    <div class="clearfix"></div>	
                </div>
            </div>
        </div>        