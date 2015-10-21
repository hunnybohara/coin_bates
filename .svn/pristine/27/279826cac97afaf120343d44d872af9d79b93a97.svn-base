<?php $this->start('script') ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.offer-block').click(function(){
            window.location = jQuery(this).attr('cbt-offer-link');
        })
    })
</script>
<?php $this->end(); ?>
<div class="main-content mer-contant">
    <div class="wrapper">
        <h2 class="mer-title">Merchant Rebates</h2>
        <div class="merchant-top">
            <div class="col-xs-3 coupen-left-main">
                <div class="coupen-left">
                <?php
                    $logo = md5($merchant->logo);
                ?>
                    <img src="<?= $this->Url->build('/images/'.$logo.'.png')?>" alt="<?= h($merchant->name) ?>">
                </div>
                <?php 
                    $re = strpos($merchant->rebate, ' ');
                    $repart1 = substr($merchant->rebate, 0, $re);
                    $repart2 = substr($merchant->rebate, $re);
                ?>
                <div class="coupen-right">
                    <span class="percentage-large"><?= $repart1; ?></span>
                    <span class="offer-title"><?= $repart2;?></span>
                    <?php if($merchant->accept_bitcoin):?>
                        <span class="offer-small-title"><?= __('Accepting Bitcoin')?></span>
                    <?php endif;?>
                </div>
                <div class="clearfix"></div>
            </div>                        
            <div class="col-xs-6 coupen-info">
                <h5><?= h($merchant->tag_line) ?></h5>
                <h6><?= h($merchant->description) ?></h6>
            </div>
            <div class="col-xs-3 coupen-info-btn-main">
                <?php if($merchant->accept_bitcoin):?>
                <?= $this->Html->image('/images/b-logo.png',[
                    'alt'       => 'logo',
                    'class'     => 'b-logo',
                ])?>
                <?php endif; ?>
                <a href="<?= $merchant->website_link ?>" target="_blank" class="bring-to-store-btn"><?= __('Bring To Store') ?></a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="merchant-special-condotion">
            <h5><?= sprintf(__('About %s'),$merchant->name) ?></h5>
            <div class="special-conditions-discription">
                <?= $this->Text->autoParagraph($merchant->description) ?>
            </div>
            <h5><?= sprintf(__('Payment Terms & Conditions'),$merchant->paymentTerm) ?></h5>
            <div class="special-conditions-discription">
                <?= $this->Text->autoParagraph($merchant->getPaymentTerm()) ?>
            </div>
        </div>
        <?php
        $offers = $merchant->offers();
        //pr($offers);die;
        if(count($offers)>0):
        ?>
        <div class="search-main-result-container">
            <div class="wrapper">
                <h3><?= sprintf("Offers By %s",$merchant->name) ?></h3>
                <div class="search-block-lists">
                    <?php for($i=0;$i<count($offers);$i++): ?>
                        <div class="col-md-9">                
                            <div cbt-offer-link="<?= $this->Html->getOfferUrl($offers[$i]['id']) ?>" class="offer-block search-block-list clickable">
                                <h6 class="search-result-title"><?= $offers[$i]['title'] ?></h6>
                                <?php /*?><p><?= $offers[$i]['sub_title'] ?></p><?php */?>
                            </div>
                        
                        </div>
                        <div class="col-md-3">                 
                            <a href="#" offer-id="<?= $offers[$i]['id'];?>" class="cbt-shop-now shop-now-btn">SHOP NOW!</a>  
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php endif; ?>
        <div class="back-at-home">
            <a href="<?= $this->URL->build('/') ?>" class="back-home"><?= __('Back to Home page')?></a>
        </div>
    </div>
</div>