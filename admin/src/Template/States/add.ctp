<section class="panel">
    <header class="panel-heading">
        <?php echo ($isEdit)?__('Edit State'):__('Add State'); ?>
    </header>
    <div class="panel-body">
        <?php
            echo $this->Form->create($state,array(
                'class'     => 'form-horizontal',
                'type'      => 'post',
            ));
            
            $this->Form->useDefaults(TRUE);
            
        ?>
        <div class="col-xs-8 col-xs-offset-2">
            <div class="form-group">
                <label class="col-xs-2 control-label"><?= __('Name'); ?></label>
                <div class="col-xs-10">
                    <?= $this->Form->input('name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2 control-label"><?= __('Slug'); ?></label>
                <div class="col-xs-10">
                    <?= $this->Form->input('slug'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2 control-label"><?= __('Country'); ?></label>
                <div class="col-xs-10">
                    <?= $this->Form->input('country_id',['options' => $countries]); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2"></label>
                <div class="col-xs-10">
                    <button class="btn btn-primary" type="Submit"><?php echo ($isEdit)?__('Update'):__('Add'); ?></button>
                    <a href="<?php echo $this->Url->build(array('action'=>'index')); ?>" class="btn btn-danger"><?php echo __('Cancel'); ?></a>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</section>
