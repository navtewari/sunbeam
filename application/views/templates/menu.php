<div class="header">
                <div class="logo">
                    <a href="#"><img src="<?php echo base_url('assets/images/logo.png');?>" alt=""/></a>
                </div>
                <div class="top-menu">
                    <span class="menu"></span>
                    <ul class="navig">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Admissions</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- script-for-menu -->
                <script>
                    $("span.menu").click(function () {
                        $("ul.navig").slideToggle("slow", function () {
                        });
                    });
                </script>
                <!-- script-for-menu -->

                <div class="clearfix"></div>
            </div>