<?php
use Cake\Routing\Router;
?>

<div class="featured-store-title">
    <h3><?= __('Featured Stores') ?></h3>
</div>
<?php
if(count($featuredOffers)>0):
$this->append('script');
?>
<script type="text/javascript">
    jQuery().ready(function(){
        jQuery("#deals-of-the-week,#featured-coupen-block-main").owlCarousel({
            autoPlay            : false, //Set AutoPlay to 3 seconds
            items               : 4,
            itemsDesktop        : [1199, 4],
            itemsDesktopSmall   : [979, 3],
            itemsTablet         : [600, 2], //2 items between 600 and 0
            navigation          : true,
            pagination          : false
        });
    });
</script>
<?php
$this->end();

?>
<div class="deal-of-week">
    <div class="wrapper">
        <h5><?= __('Deals of the Week') ?></h5>
        <div class="deal-coupen-blocks">
            <ul id="deals-of-the-week" class="coupen-slider-main owl-carousel owl-theme">
                <?php
                if($featuredOffers){
                foreach($featuredOffers as $offer):                    
                ?>
                    <li class="item">
                        <a href="<?= $this->Html->getOfferUrl($offer->id)?>">
                            <div class="coupen-left">
                                
                                <?php                        
                                    $logo = md5($offer->merchant->logo);                                         
                                ?>
                               
                                <img src="<?= $this->Url->build('/images/'.$logo.'.png')?>" alt="prd-1">
                            </div>
                            <div class="coupen-right">
                                <!-- <span class="percentage-large"><?= $offer->display_count ?></span> -->
                                <span class="offer-title"><?= $offer->display_title ?></span>
                                <?php
                                if($offer->merchant->accept_bitcoin):
                                    ?>
                                    <span class="offer-small-title"><?= __('Accepting Bitcoin'); ?></span>
                                    <?php
                                endif;
                                ?>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                <?php
                endforeach;
                }
                ?>
            </ul>
            <div class="clearfix"></div>
        </div>                    
    </div>
</div>
<?php 
endif;
?>
<?php 
 
if(count($featuredMerchants) >0) :
?>
<div class="featured-store-main">
    <div class="wrapper">
    <h5><?= __('Featured Stores') ?></h5>
        <div class="deal-coupen-blocks">
            <ul>
                <?php
                foreach($featuredMerchants as $merchant):    
                ?>
                <?php                        
                $logo = md5($merchant->logo);                
                ?>  
                <li>
                    <a href="<?= $this->Html->getMerchantUrl($merchant->id) ?>">
                        <div class="coupen-left">
                            <img src="<?= $this->Url->build('/images/'.$logo.'.png')?>" alt="prd-1">
                        </div>
                        <div class="coupen-right">
                            <?php 
                                $re = strpos($merchant->rebate, ' ');
                                $repart1 = substr($merchant->rebate, 0, $re);
                                $repart2 = substr($merchant->rebate, $re);
                            ?>

                            <span class="percentage-large"><?= $repart1; ?></span>
                            <span class="offer-title"><?= $repart2; ?></span>
                            <?php
                            if($merchant->acceptBitcoin):
                                ?>
                                <span class="offer-small-title"><?= __('Accepting Bitcoin') ?></span>
                                <?php
                            endif;
                            ?>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <?php
                endforeach;

                ?>
            </ul>
            <div class="clearfix"></div>
        </div> 
    </div>
</div>
<?php
endif;
