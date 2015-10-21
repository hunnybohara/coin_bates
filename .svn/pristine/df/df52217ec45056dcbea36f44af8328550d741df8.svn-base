<?php 
    echo $this->Form->create('User',[
        'class'     => 'form-signin',
        'action'    => 'login',
    ]) 
?>

    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            <div class="line">
                <h3><?php echo __('Sign in now')?></h3></div>
            <div class="outter"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/leemunroe/128.jpg" class="image-circle" /></div>
            <h1 class="welcome-title">Hello, <span>Admin!</span></h1>
            <?php /*?> <span>INDIAN</span>
                <?php */?>
        </div>
        <?php /*?>
            <div class="col-md-6 col-xs-6 follow line" align="center">
                <h3>
                 125651 <br/> <span>FOLLOWERS</span>
            </h3>
            </div>
            <div class="col-md-6 col-xs-6 follow line" align="center">
                <h3>
                 125651 <br/> <span>FOLLOWERS</span>
            </h3>
            </div>
            <?php */?>
                <div class="clearfix"></div>
                <div class="login-wrap login_control">
                    <?= $this->Flash->render() ?>
                        <div class="user-login-info fdsg">
                            <?php
                echo $this->Form->text('email',[
                    'class'         => 'form-control',
                    'placeholder'   => __('Email'),
                    'autofocus'     => 'autofocus',
                ]); 
            ?>
                                <?php 
                echo $this->Form->password('password',[
                    'class'         => 'form-control',
                    'placeholder'   => __('Password'),
                ]); 
            ?>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me</label>
                            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
            </span>
                        </div>
                        <?php
            echo $this->Form->button(__('Sign in'),[
                'class' => 'btn btn-lg btn-primary btn-login btn-block'
            ]);
        ?>
                </div>

                <?php /*?>
                    <div class="col-md-12 col-xs-12 login_control">

                        <div class="control">
                            <div class="label">Email Address</div>
                            <input type="text" class="form-control" value="admin@gmail.com" />
                        </div>

                        <div class="control">
                            <div class="label">Password</div>
                            <input type="password" class="form-control" value="123456" />
                        </div>
                        <div align="center">
                            <button class="btn btn-orange">LOGIN</button>
                        </div>

                    </div>
                    <?php */?>



    </div>



    <?= $this->Form->end() ?>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->