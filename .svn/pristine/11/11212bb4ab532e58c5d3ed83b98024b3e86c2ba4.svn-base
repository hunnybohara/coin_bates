<section class="panel">
    <header class="panel-heading"><?= __('Add Offer'); ?></header>
    <div class="panel-body">
        <?= 
            $this->Form->create($offer,[
                'class'     => 'form-horizontal',
                'type'      => 'file',
            ]); 
        ?>
        <?php $this->Form->useDefaults(TRUE); ?>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Title')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('title'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Sub Title')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('sub_title'); ?>
                </div>
            </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Short Display Count')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('display_count'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Short Display Title')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('display_title'); ?>
                </div>
            </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Merchant')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('merchant_id', ['options' => $merchants]); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-3">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Commision Offered')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('commision_offered'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-3">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Commision Receivable')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('commision_receivable'); ?>
                </div>
            </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Ref. Link')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('link'); ?>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Status')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('status'); ?>
                </div>
            </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12   control-label"><?= __('Is Featured Offer ?')?></label>
                <div class="col-xs-12 cib-radio">
                    <?= $this->Form->radio('is_featured',[
                        ['value' => '1', 'text' => __('Yes')],
                        ['value' => '0', 'text' => __('No')],
                    ],['hiddenField'=>false]); ?>
                </div>
            </div>
            </div>
        </div>
         <div class="row-fluid">
            <div class="col-xs-12">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Description About offer')?></label>
                <div class="col-xs-12">
                    <?= $this->Form->input('description') ?>
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
