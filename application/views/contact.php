<div class="banner2">
    <?php $this->load->view('templates/menu'); ?>
</div>
<!--contact-->
<div class="contact">
    <div class="container">
        <div class="main-head-section">
            <h2>Contact</h2>
            <div class="contact-map">
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=The%20Sunbeam%20Senior%20Secondary%20School%2C%20haldwani&key=AIzaSyCLhJL8fD5gTA-ZZthonhF73Yhhg67QaSs" allowfullscreen></iframe>
            </div>
        </div>
        <div class="contact_top">			 		
            <div class="col-md-8 contact_left">
                <h4>Quick Query</h4>                
                <form action="<?PHP echo site_url('web/contactus'); ?>" method="post">
                    <?php if ($this->session->flashdata('_msg_')) { ?>
                        <div class="row">
                            <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                                <?php echo $this->session->flashdata('_msg_'); ?>
                            </div>
                            <div class="col-sm-12">
                                &nbsp;
                            </div>
                        </div>
                    <?php } ?>
                    <div class="form_details">
                        <input type="text" class="text" name="txtname" required placeholder="Name">
                        <input type="email" class="text" name="txtemail" required placeholder="Email">
                        <input type="text" class="text" name="txtPhone" required placeholder="Phone Number">
                        <textarea name="txtmessage" value="Message" required placeholder="Message"></textarea>
                        <div class="clearfix"> </div>
                        <div class="sub-button">
                            <input type="submit" value="Send message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 company-right">
                <div class="company_ad">
                    <h3>Address</h3>
                    <span>The Sunbeam Senior Secondary School</span>
                    <address>                        
                        <p>Himmatpur Talla, </p>
                        <p>Haldwani- 263139, District- Nainital</p>
                        <p>Uttarakhand, India</p>
                        <p>&nbsp;</p>
                        <p><b>email :</b> <a href="#">thesunbeamschool2006@gmail.com<br>
                                jcpant.20002002@gmail.com </a></p>
                        <p><b>phone :</b> 9410112596, 9897910445</p>
                    </address>
                </div>
            </div>	
            <div class="clearfix"> </div>
        </div>
    </div>
</div>