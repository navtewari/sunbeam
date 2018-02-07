<div class="vticker">
    <div class="date">
        <img src="<?php echo base_url('assets/images/t1.jpg');?>" class="img-responsive" alt="" style="max-height:100px;margin-left:5%;"/>
    </div>

    <div class="event-info" style="min-height: 280px;">                            
        <h5><a href="#">Happy Birthday</a></h5>

        <?php foreach($bday as $item){?>
        <li style="list-style: none">
            <div class="news-grid" style="padding: 10px;border-bottom: #C0C0C0 dotted 1px">
            <h4><?php echo $item->day;?></h4>
            <span><?php echo $item->mnth;?></span>
        </div>
        </li>
        <?php } ?>
    </div>
</div>
    <div class="clearfix"></div>