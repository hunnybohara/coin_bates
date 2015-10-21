<?php $this->append('script'); ?>
<script type="text/javascript">
    jQuery().ready(function(){
        jQuery('.tags').tagsInput({
            width               :'100%',
            autocomplete_url    : '<?= $this->URL->build(['controller'=>'tags','action'=>'getTokenSuggestion'])?>',
            autocomplete        : {
                minLength       : 3
            }
        });
    });
</script>
<?php $this->end(); ?>
<section class="panel">
    <header class="panel-heading"><?= __('Add Merchant'); ?></header>
    <div class="panel-body">
    <?= 
        $this->Form->create($merchant,[
            'class'     => 'form-horizontal',
            'type'      => 'file',
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
            <label class="col-xs-12  control-label"><?= __('Website Link')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('website_link'); ?>
            </div>
        </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Status')?></label>
            <div class="col-xs-12">
                <?= $this->Form->input('status'); ?>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Affiliation Network')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('network_id',['options' => $affiliateNetworks]); ?>
            </div>
        </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Categories')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('categories._ids',[
                        'placeholder'   => "Select the Category",
                        'empty'         => __('Select Category'),
                        'multiple'      => 'multiple',
                        'class'         => 'sel2',
                        'options'       => $categories,
                        'value'         => $selCategories,
                    ]); 
                ?>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Tags')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->text('tag',[
                        'class' => 'tags form-control',
                    ]); 
                ?>
            </div>
        </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="col-xs-12 control-label"><?= __('Merchant Logo') ?></label>
                <div class="col-xs-12">
                    <?= $this->Form->file('logo') ?>
                </div>
            </div>
        </div>        
    </div> 
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Rebate')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('rebate'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="col-xs-12  control-label"><?= __('Similar Merchant')?></label>
                <div class="col-xs-12 ">
                    <?= $this->Form->input('merchants._ids',[
                            'placeholder'   => "Select the Merchant",
                            'empty'         => __('Select Merchant'),
                            'multiple'      => 'multiple',
                            'class'         => 'sel2',
                            'options'       => $merchants,
                            'value'         => $selMerchants,
                        ]); 
                    ?>
                </div>
            </div>
        </div>
    </div>   
    <div class="row-fluid">
        <div class="col-xs-12 ">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Tag Line')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('tag_line',['type'=>'textarea']); ?>
            </div>
        </div>
        </div>
    </div>   
    <div class="row-fluid">
        <div class="col-xs-12 ">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Description')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('description',['type'=>'textarea']); ?>
            </div>
        </div>
        </div>
    </div>  
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-4">
        <div class="form-group">
            <label class="col-xs-12   control-label"><?= __('Accept Bit Coin ?')?></label>
            <div class="col-xs-12 cib-radio">
                <?= $this->Form->radio('accept_bitcoin',[
                    ['value' => '1', 'text' => __('Yes')],
                    ['value' => '0', 'text' => __('No')],
                ],['hiddenField'=>false]); ?>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-4">
        <div class="form-group">
            <label class="col-xs-12   control-label"><?= __('Is Featured Store ?')?></label>
            <div class="col-xs-12 cib-radio">
                <?= $this->Form->radio('is_featured',[
                    ['value' => '1', 'text' => __('Yes')],
                    ['value' => '0', 'text' => __('No')],
                ],['hiddenField'=>false]); ?>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-4">
        <div class="form-group">
            <label class="col-xs-12   control-label"><?= __('Default Payment Terms ?')?></label>
            <div class="col-xs-12 cib-radio">
                <?= $this->Form->radio('default_term',[
                    ['value' => '1', 'text' => __('Yes')],
                    ['value' => '0', 'text' => __('No')],
                ],['hiddenField'=>false]); ?>
            </div>
        </div>
        </div>
    </div>    
    <div class="row-fluid">
        <div class="col-xs-12 ">
        <div class="form-group">
            <label class="col-xs-12  control-label"><?= __('Payment Terms')?></label>
            <div class="col-xs-12 ">
                <?= $this->Form->input('payment_term',['type'=>'textarea']); ?>
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
