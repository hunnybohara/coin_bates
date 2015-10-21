<?php
$this->append('script');
?>
<script type="text/javascript">
    jQuery().ready(function(){
        
        jQuery('.additional-info-panel').hide();
        /**
         *
         * Load the Additional Details Form for the 
         * Appripriate Role
         * 
         */
        jQuery('#role').change(function(){
            jQuery('.additional-info-panel').hide();
            switch(jQuery(this).val()){
                case 'agent':
                    jQuery('#agent-details').show();
                    break;
                case 'do':
                    jQuery('#do-details').show();
                    break;
            }
            
        }).trigger('change');
    });
</script>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<?php $this->Form->useDefaults(TRUE); ?>
<section class="panel">
    <header class="panel-heading"><i class="fa fa-user"></i> <?php echo __('Add User'); ?></header>
    <div class="panel-body">
        
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="first-name"><?php echo __('Fist Name'); ?></label>
                    <div class="col-xs-12">
                    <?php 
                        echo $this->Form->input('first_name',[
                            'placeholder'   => __('First Name of User'),
                        ]); 
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="last-name"><?php echo __('Last Name'); ?></label>
                    <div class="col-xs-12">
                    <?php 
                        echo $this->Form->input('last_name',[
                            'placeholder'   => __('Last Name of User'),
                        ]); 
                    ?>
                    </div>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
        
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="email"><?php echo __('E-mail'); ?></label>
                    <div class="col-xs-12">
                    <?php 
                        echo $this->Form->input('email',[
                            'placeholder'   => __('E-mail Address of User'),
                        ]); 
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="role"><?php echo __('Role'); ?></label>
                    <div class="col-xs-12">
                    <?php echo $this->Form->input('role'); ?>
                    </div>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
        
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="status"><?php echo __('Status'); ?></label>
                    <div class="col-xs-12">
                    <?php echo $this->Form->input('status'); ?>
                    </div>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
        
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="password"><?= __('password'); ?></label>
                    <div class="col-xs-12">
                    <?php 
                        echo $this->Form->input('password',[
                            'placeholder'   => __('Password For User'),
                        ]); 
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12 control-label" for="confirm_password"><?= __('Confirm Password'); ?></label>
                    <div class="col-xs-12">
                    <?php 
                        echo $this->Form->input('confirm_password',[
                            'type'          => 'password',
                            'placeholder'   => __('Confirm Password For User'),
                        ]); 
                    ?>
                    </div>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
        
        <div class="row-fluid clearfix">
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <div class="col-xs-10">
                    <button class="btn btn-primary" type="Submit"><?php echo ($isEdit)?__('Update'):__('Add'); ?></button>
                    &nbsp;&nbsp;
                    <a href="<?php echo $this->Url->build(array('action'=>'index')); ?>" class="btn btn-danger"><?php echo __('Cancel'); ?></a>
                </div>
            </div>
            </div>
        </div>
        
    </div>    
</section>
<?= $this->Form->end() ?>

