<div class="banner2">     
    <?php $this->load->view('templates/menu'); ?>
</div>
<!---->
<div class="gallery">
    <div class="container">
        <h2>Gallery</h2>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/swipebox.css');?>">
        <script src="<?php echo base_url('assets/js/jquery.swipebox.min.js');?>"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
            <?php foreach($gallery as $item){?>
            <div class="event-pics">
            <a href="<?php echo ADMIN___ . '/_assets_/gallery/'.$item->PHOTO_;?>" class="b-link-stripe b-animate-go  swipebox"  title="THe Sunbeam Sr. Sec. School" width="100%">
                <img src="<?php echo ADMIN___ . '/_assets_/gallery/'.$item->PHOTO_;?>" alt="" class="img-responsive">
            </a>            
            </div>
            <?php }?>
            <div class="clearfix"></div>
        
    </div>
</div>