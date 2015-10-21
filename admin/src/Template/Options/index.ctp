<section class="panel">
    <header class="panel-heading"><?= __('Options'); ?></header>
    <div class="panel-body">
    <?= 
        $this->Form->create(NULL,[
            'class'     => 'form-horizontal',
            'type'      => 'post',
        ]); 
    ?>
    <?php $this->Form->useDefaults(TRUE); ?>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12  control-label"><?= __('Site Name')?></label>
                    <div class="col-xs-12 ">
                        <?= $this->Form->input('site_name',[
                            'value' => $options['site_name'],
                        ]); ?>
                    </div>
                </div>
            </div>  
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12  control-label"><?= __('Admin Email')?></label>
                    <div class="col-xs-12 ">
                        <?= $this->Form->input('admin_email',[
                            'value' => $options['admin_email'],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12  control-label"><?= __('Mandril Api Key')?></label>
                    <div class="col-xs-12 ">
                        <?= $this->Form->input('mandril_api_key',[
                            'value' => $options['mandril_api_key'],
                        ]); ?>
                    </div>
                </div>
            </div>  
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label class="col-xs-12  control-label"><?= __('Facebook Api Key')?></label>
                    <div class="col-xs-12 ">
                        <?= $this->Form->input('facebook_api_key',[
                            'value' => $options['facebook_api_key'],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="panel">
    <header class="panel-heading"><?= __('Default Content'); ?></header>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Default Payment Terms & Condition')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('default_payment_tnc',[
                    'value' => $options['default_payment_tnc'],
                    'type'  => 'textarea',
                ]); ?>
            </div>
        </div>
    </div>
</section>
<div class="row-fluid">
        <div class="col-xs-12">
        <div class="form-group">
            <div class="col-xs-12">
                <button class="btn btn-primary" type="submit" id="add-branch-btn"><?= __('Update'); ?></button>
            </div>
        </div>
        </div>
    </div>
<?= $this->Form->end() ?>