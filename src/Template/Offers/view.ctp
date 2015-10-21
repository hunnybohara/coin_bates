<?php $this->append('script'); ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.cbt-shop-now').click(function(){
            if($isUserLoggedIn){
                $link = '<?= $this->Url->build(['action'=>'r']) ?>/' + jQuery(this).attr('offer-id');
                //window.location = '<?= $this->Url->build(['action'=>'r']) ?>/' + jQuery(this).attr('offer-id');
                window.open($link,'_blank');
            }else{
                jQuery('#login-modal-btn').trigger('click');                
                //$link = '<?= $this->Url->build(['action'=>'r']) ?>/' + jQuery(this).attr('offer-id');
                //window.open($link,'_blank');
            }
        });
    });
</script>
<?php $this->end(); ?>
<div class="main-content padd-top-120">
    <div class="wrapper">
        <div class="main-top-content">
            <h3>
                <?= $offer->has('merchant') ? $this->Html->link($offer->merchant->name, ['controller' => 'Merchants', 'action' => 'view', $offer->merchant->name]) : '' ?> 
            </h3>                        
        </div>
        <div class="merchant-top">
            <div class="col-xs-3 coupen-left-main">
                <div class="coupen-left">
                    <?php /* $this->Html->image($offer->merchant->getLogoFile()->getImgUrl(150,150));*/ ?>
                <?php
                    $logo = md5($offer->merchant->logo);
                ?>
                    <img src="<?= $this->Url->build('/images/'.$logo.'.png')?>" alt="<?= h($offer->merchant->name) ?>">
                </div>
                <div class="coupen-right">
                    <span class="percentage-large"><?= $offer->display_count ?></span>
                    <span class="offer-title"><?php //$offer->display_title ?></span>
                    <?php if($offer->merchant->accept_bitcoin):?>
                    <span class="offer-small-title"><?= __('Accepting Bitcoin')?></span>
                    <?php endif; ?>
                </div>
                <div class="clearfix"></div>
            </div>                        
            <div class="col-xs-5 coupen-info">
                <h6><?= h($offer->title) ?></h6>
                <?php /*?><p><?= h($offer->sub_title)?></p><?php */?>
<!--                <ul>
                    <li>Special Offer in NYC Stores</li>                                
                </ul>-->
            </div>
            <div class="col-xs-4 coupen-info-btn-main">
                <?php if($offer->merchant->accept_bitcoin):?>
                <?= $this->Html->image('/images/b-logo.png',[
                    'alt'       => 'logo',
                    'class'     => 'b-logo',
                ])?>
                <?php endif; ?>
                <a href="#" offer-id='<?= $offer->id ?>' class="cbt-shop-now shop-now-btn">SHOP NOW!</a>
                <a href="<?= $offer->merchant->website_link ?>" class="bring-to-store-btn">BRING TO STORE</a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="merchant-special-condotion">
            <h5><?= __('Terms And Condition') ?></h5>
            <div class="special-conditions-discription">
                <?= $this->Text->autoParagraph($offer->description) ?>
            </div>
        </div>
        <div class="back-at-home">
            <a href="<?= $this->Html->getMerchantUrl($offer->merchant->id) ?>" class="back-home"><?= __('Back to Merchants Page')?></a>
        </div>
    </div>
</div>

            
        