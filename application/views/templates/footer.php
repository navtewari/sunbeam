        <!---->
        <div class="footer">
            <div class="container">
                <div class="ftr-sec">
                    <div class="col-md-6 ftr-grid">
                        <h3>Our School</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
                    </div>
                    <div class="col-md-3 ftr-grid2">
                        <h3>Pages</h3>
                        <ul>
                            <li><a href="#"><span></span>Home</a></li>
                            <li><a href="#"><span></span>About</a></li>
                            <li><a href="#"><span></span>Admissions</a></li>
                            <li><a href="#"><span></span>Features</a></li>	
                            <li><a href="#"><span></span>Gallery</a></li>
                            <li><a href="#"><span></span>Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr-grid3">
                        <h3>Important Links</h3>
                        <ul>
                            <li><a href="http://www.cbse.nic.in" target="_blank">www.cbse.nic.in</a>
                            <li><a href="http://www.cbseresults.nic.in" target="_blank">www.cbseresults.nic.in</a>
                            <li><a href="http://www.ncert.nic.in" target="_blank">www.ncert.nic.in</a>
                            <li><a href="http://www.indiaresults.com" target="_blank">www.indiaresults.com</a>
                            <li><a href="http://www.india.gov.in" target="_blank">www.india.gov.in</a>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---->
        <div class="copywrite">
            <div class="container">
                <p>Copyright © 2018 Sunbeam School. All rights reserved | Design by <a href="https://Teamfreelancers.com">Teamfreelancers</a></p>
            </div>
        </div>
        <!---->
        <script src="<?PHP echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>
        <script src="<?PHP echo base_url('assets/js/jquery.easy-ticker.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.twitterFader.min.js');?>"></script>
        <script>
            jQuery(function ($) {
                var dd = $('.vticker').easyTicker({
                direction: 'up',
                easing: 'easeInSine',
                speed: 'slow',
                interval: 3000,
                height: 'auto',
                visible: 2,
                mousePause: 0,
                controls: {
                    up: '.up',
                    down: '.down',
                    toggle: '.toggle',
                    playText: '<i class="fa fa-play" aria-hidden="true"></i>',
                    stopText: '<i class="fa fa-pause" aria-hidden="true"></i>'
                }
                }).data('easyTicker');

                cc = 1;
                $('.aa').click(function () {
                    $('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
                    cc++;
                });

                $('.vis').click(function () {
                    dd.options['visible'] = 3;

                });

                $('.visall').click(function () {
                    dd.stop();
                    dd.options['visible'] = 0;
                    dd.start();
                });

                $('#webticker').webTicker();
                $('#webticker').webTicker({
                    travelocity: 0.05,
                    direction: -1
                });

            });
        </script>
    </body>
</html>