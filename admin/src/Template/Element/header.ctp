<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <div id="avatar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="img-responsive img-circle avatar-image" src="<?php echo $this->Html->gravtarImgsrc($current_user['email']); ?>" width="50" height="50">
                    </div>
                    <div class="col-sm-7" id="avatar-col">
                        <?php echo $current_user['first_name'] .' ' . $current_user['last_name']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-controls-container">
            <div class="sidebar-controls">
                <div class="col-sm-6 text-center user-profile">
                    <a href="<?php echo $this->Url->build(['controller'=>'users','action'=>'edit']); ?>"><span class="fa fa-user"></span></a>
                </div>
                <div class="col-sm-6 text-center user-logout">
                    <a href="<?php echo $this->Url->build(['controller'=>'users','action'=>'logout']); ?>"><span class="fa fa-power-off"></span></a>
                </div>
            </div>
        </div>

        <a href="<?php echo $this->Url->build(['controller'=>'pages','action'=>'home']); ?>" class="logo">

        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->

    <div class="nav notify-row" id="top_menu">
        <a href="#">
            <img class="img-responsive" src="http://i.imgur.com/R3HsZh7.png">
        </a>
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->


        <!--search & user info end-->
    </div>
</header>
<!--header end-->