<section class="panel">
    <header class="panel-heading"><?= __('Add Taxonomy'); ?></header>
    <div class="panel-body">
    <?= 
        $this->Form->create($taxonomy,[
            'class'     => 'form-horizontal',
            'type'      => 'post',
        ]); 
    ?>
    <?php $this->Form->useDefaults(TRUE); ?>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Name')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('name'); ?>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Slug')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('slug'); ?>
            </div>
        </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Parent')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('parent'); ?>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Type')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('type',[
                    'options'   => $types,
                    'value'     => (isset($type)?$type:""),
                ]); ?>
            </div>
        </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12">
        <div class="form-group">
            <div class="col-xs-12">
                <button class="btn btn-primary" type="submit" id="add-branch-btn"><?= ($isEdit)?__('Update'):__('Add'); ?></button>
                <a href="<?= $this->Url->build(array('action'=>'index')); ?>" class="btn btn-danger"><?= __('Cancel'); ?></a>
            </div>
        </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
    </div>
</section>
