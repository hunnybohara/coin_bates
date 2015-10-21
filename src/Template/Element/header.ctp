<?php $this->append('script'); ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.lang-select').change(function(){
            url   = '<?= $this->URL->build(['controller'=>'users','action'=>'changelang']) ?>';
            url  += '?lang=' + jQuery(this).val();
            window.location = url;
        });
    });
    var $isUserLoggedIn = <?= ($isUserLoggedIn)?'true':'false' ?>;
</script>
<?php $this->end(); ?>
<div class="header-main">
    <div class="wrapper">
        <div class="row">
            <div class="logo col-xs-3">
                <a href="<?= $this->Url->build('/',TRUE); ?>" title="logo">
                    <img src="<?= $this->Url->build('/images/logo.png'); ?>" alt="logo" class="logo-img"/>
                </a> 
            </div>
            <div class="head-right-menu pull-right col-xs-3">
                <div class="lang-selector">
                    <span class="white-arrow-select"></span>
                    <select class="lang-select">
                        <?php
                        foreach(\Cake\Core\Configure::read('supported_lang') as $key => $value){
                            ?>
                        <option <?= ($current_lang == $key)?'selected="selected"':'' ?> value="<?= $key ?>"><?= $value ?></option>
                            <?php
                        }
                        ?>
                    </select>                                
                </div>
                <div class="log-main">
                    <ul>
                        <?php if($isUserLoggedIn) :?>
                            <li class="log-sign-in"><a href="<?= $this->Url->build(['controller'=>'users','action'=>'editprofile']) ?>"><?= sprintf(__('Hi %s'),$current_user['first_name']) ?></a></li>
                            <li class="log-sign-in"><a href='<?= $this->Url->build(['controller'=>'users','action'=>'logout']) ?>'><?= __('Log Out')?></a></li>
                        <?php else: ?>
                            <li class="log-sign-in"><a href="#" id='login-modal-btn' data-toggle="modal" data-target="#cbts-login-modal"><?= __('Log In') ?></a></li>
                            <li class="log-sign-up"><a href="#" id='signup-modal-btn' data-toggle="modal" data-target="#cbts-signup-modal"><?= __('Sign In') ?></a></li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>                        
            <div class="clearfix"></div>
        </div>
    </div>                
</div>
<?= $this->Element('model/signup'); ?>
<?= $this->Element('model/login'); ?>
<?php
if(!$isFrontPage){
    ?>
<div class="slider-main">
    <img src="<?= $this->URL->build('/images/banner-2.jpg') ?>" alt="banner" class="img-responsive"/>
</div>
<?= $this->Element('search'); ?>
    <?php
}
?>