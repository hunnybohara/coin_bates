<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <div id="avatar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-xs-collapse-right">
                        <img width="40" height="40" src="https://s3.amazonaws.com/uifaces/faces/twitter/leemunroe/128.jpg">
                    </div>
                    <div class="col-xs-8 col-xs-collapse-left" id="avatar-col">
                        <div>Anna Sanchez</div>
                        <div>
                            <a data-reactid=".1uywldqi9s0.0.0.0.0.1.1.1" href="/app/lock" class=""><span data-reactid=".1uywldqi9s0.0.0.0.0.1.1.1.0" class="rubix-icon fontello icon-fontello-lock-5" id="demo-icon"></span></a></div>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?php echo $this->Url->build(['controller'=>'pages','action'=>'home']); ?>" class="logo">
            <?php
        echo $this->Html->image('/images/logo.png');
        ?>
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->

    <div class="nav notify-row" id="top_menu">

    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo $this->Html->gravtarImgsrc($current_user['email']); ?>">
                <span class="username"><?php echo $current_user['first_name'] .' ' . $current_user['last_name']; ?></span>
                <b class="caret"></b>
            </a>
                <ul class="dropdown-menu extended logout">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller'=>'users','action'=>'edit']); ?>">
                            <i class=" fa fa-suitcase"></i>
                            <?php echo __('Profile'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller'=>'users','action'=>'logout']); ?>">
                            <i class="fa fa-key"></i>
                            <?php echo __('Log out'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->