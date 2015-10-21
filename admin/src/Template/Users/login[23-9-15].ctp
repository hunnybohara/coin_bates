<?php 
    echo $this->Form->create('User',[
        'class'     => 'form-signin',
        'action'    => 'login',
    ]) 
?>
<h2 class="form-signin-heading"><?php echo __('Sign in now')?></h2>
    <div class="login-wrap">
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
                    'placeholder'   => __('password'),
                ]); 
            ?>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="remember-me"> Remember me</label>
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
            </span>
        </div>
        <?php
            echo $this->Form->button(__('Sign in'),[
                'class' => 'btn btn-lg btn-login btn-block'
            ]);
        ?>
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




          
