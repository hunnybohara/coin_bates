<section class="panel">
    <header class="panel-heading"><?= __('Add Affiliate Network'); ?></header>
    <div class="panel-body">
        <?= $this->Form->create($affiliateNetwork,[
                'class'     => 'form-horizontal',
                'type'      => 'post',
            ]); 
        ?>
        
        <?php
            $this->Form->useDefaults(TRUE);
        ?>
        <div class="col-xs-12">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Network Name')?></label>
                <div class="col-xs-12 col-sm-6 ">
                    <?= $this->Form->input('name'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label class="col-xs-12 control-label"><?= __('Terms/Agreement Detail')?></label>
                <div class="col-xs-12">
                    <?= $this->Form->input('terms',[
                        'type'  => 'textarea',
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label class="col-xs-12 control-label"><?= __('Terms/Agreement Detail')?></label>
                <div class="col-xs-12 col-sm-4">
                    <?= $this->Form->input('status'); ?>        
                </div>
            </div>
        </div>
        <div class="col-xs-12">
        <div class="form-group">
                <div class="col-xs-12">
                    <button class="btn btn-primary" type="submit" id="add-branch-btn"><?= ($isEdit)?__('Update'):__('Add'); ?></button>
                    <a href="<?= $this->Url->build(array('action'=>'index')); ?>" class="btn btn-danger"><?= __('Cancel'); ?></a>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</section>
    