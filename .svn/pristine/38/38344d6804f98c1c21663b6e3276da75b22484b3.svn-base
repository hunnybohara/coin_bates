<section class="panel">
    <header class="panel-heading"><?= __('Add Email'); ?></header>
    <div class="panel-body">
    <?= 
        $this->Form->create($email,[
            'class'     => 'form-horizontal',
            'type'      => 'post',
        ]); 
    ?>
    <?php $this->Form->useDefaults(TRUE); ?>
        <div class="row-fluid">
            <div class="col-xs-12 ">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Subject')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('subject'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 ">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Code')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('code'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 ">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Params')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('params'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 ">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Mail Body')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('message'); ?>
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
    </div>
        </div>
    <?= $this->Form->end() ?>
    </div>
</section>
