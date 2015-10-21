<?php $this->start('script'); ?>
<script type="text/javascript">
jQuery(document).ready(function () {
    jQuery("#deals-of-the-week,#featured-coupen-block-main").owlCarousel({
        autoPlay: false, //Set AutoPlay to 3 seconds
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [600, 2], //2 items between 600 and 0
        navigation: true,
        pagination: false,
    });
});
</script>
<?php $this->end(); ?>
<div class="slider-main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">           
            <div class="item active">
                <img src="images/slider-1.png" alt="banner"/>
                <div class="carousel-caption">
                    <h5><?= __("It's so easy to save") ?></h5>
                    <p><?= __('While You Shop') ?></p>
                </div>
            </div>
            <div class="item">
                <img src="images/slider-2.png" alt="banner"/>
                <div class="carousel-caption">
                    <h5><?= __("Be Smart") ?></h5>
                    <p><?= __('earn money and start shopping at Coinbates') ?></p>
                </div>
            </div>
            <div class="item">
                <img src="images/slider-3.png" alt="banner"/>
                <div class="carousel-caption">
                    <h5><?= __("No matter where you are in the world,") ?></h5>
                    <p><?= __('get paid when you shop') ?></p>
                </div>
            </div>
        </div>
        <!--<ol class="carousel-indicators">                                         
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>                                   
        </ol>-->
    </div>
</div>
<?= $this->Element('search'); ?>
<div class="main-content padd-top-120">
    <div class="wrapper">
        <div class="main-top-content">
            <h3><?= __('How it works ?') ?></h3>
            <h6>Earn bitcoin with every purchase you make.</h6>
            <p>We reward online shopping with bitcoin.  The more you shop, the more you earn.</br>  
                The great news is that we pay weekly - no matter how much or how little you have shopped.</p>
        </div>
        <div class="main-bottom-content">
            <ul class="work-bottom-lists">
                <li >
                    <a class="img-block-list">
                        <img src="images/block-1.png" alt="block"/>
                    </a>
                    <h6>
                        Sign up or Log in
                    </h6>
                    <p> got different ways  of being partner coinbate</p>
                </li>
                <li>
                    <a class="img-block-list">
                        <img src="images/block-2.png" alt="block"/>
                    </a>
                    <h6>
                        Your Wallet
                    </h6>
                    <p>User Inputs Wallet ID</p>
                </li>
                <li>
                    <a class="img-block-list">
                        <img src="images/block-3.png" alt="block"/>
                    </a>
                    <h6>
                        Shop Time!
                    </h6>
                    <p>You click on a Coinbates Merchant</p>
                </li>
                <li>
                    <a class="img-block-list">
                        <img src="images/block-4.png" alt="block"/>
                    </a>
                    <h6>
                        Pay and enjoy
                    </h6>
                    <p>Complete your purchase</p>
                </li>
                <li>
                    <a class="img-block-list">
                        <img src="images/block-5.png" alt="block"/>
                    </a>
                    <h6>
                        Coinbates Fee
                    </h6>
                    <p>The Merchant pays Coinbates  an affiliate fee</p>
                </li>
                <li>
                    <a class="img-block-list">
                        <img src="images/block-6.png" alt="block"/>
                    </a>
                    <h6>
                        Fee to you
                    </h6>
                    <p>We share the affiliate fee to you</p>
                </li>
                <li>
                    <a class="img-block-list">
                        <img src="images/block-7.png" alt="block"/>
                    </a>
                    <h6>
                        Bitcoin Reward
                    </h6>
                    <p>Every Wednesday we send bitcoin to your wallet</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="bitcoin-wallet-main">
    <?php if(!$isUserLoggedIn) :?>
        <div class="wrapper">
            <h3>How does Bitcoin Wallet works?</h3>
            <div class="row">
                <div class="bitcoin-wallet-right col-xs-7 pull-right">
                    <div class="bitcoin-wallet-img">
                        <img src="images/wallet.png" alt="wallet"/>
                        <a href="#" class="wallet-start-now">START NOW!</a>
                    </div>
                </div>
                <div class="bitcoin-wallet-left col-xs-5">
                    <ul>
                        <li>
                            <h6>Add all your Addresses</h6>
                            <p>Add all the public addresses you already have.<br/> Accept any cryptocoin from anyone on one page. </p>
                        </li>
                        <li>
                            <h6>Send coins to Users for Free</h6>
                            <p>Send any amount of bitcoin to any other user instantly<br/> with no transaction fee and no confirmation delays.</p>
                        </li>
                        <li>
                            <h6>Security</h6>
                            <p>Proof of Solvency, SHA-2 SSL, AES user data encryption,<br/> 2FA on all accounts, majority of funds in cold storage.</p>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    <?php else:?>
        <div class="wrapper">            
            <div class="row">
                <div class="col-md-5 login-wallet">
                    <h3 class="ask-wallet">Do you have Bitcoin Wallet?</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <form name="wallet-form" action="" method="post" class="form-horizontal">
                        <label class="col-md-3 control-label" for="inputText">Your Wallet ID:</label>
                        <div class="col-md-9">
                            <input type="text" name="walletid" id="wallet_id" class="form-control">
                            <input type="button" name="go" value="GO!" class="btn btn-primary" onclick="chk_wallet();">
                            <div class="wallet-error" id="wallet-error" style="display:none;"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 login-wallet-img">
                    <img src="images/login-wallet.png" alt="wallet"/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php endif;?>    
</div>
<?= $this->Element('deal_of_week'); ?>
<?= $this->Element('counter'); ?>
<?= $this->Element('faq'); ?>
<script type="text/javascript">
    function chk_wallet()
    {
        var walletid = document.getElementById("wallet_id").value;
        if(walletid == '')
        {
            document.getElementById("wallet-error").innerHTML = 'Enter your Bitcoin ID';
            document.getElementById("wallet-error").style.display = 'block';
        }
    }
</script>