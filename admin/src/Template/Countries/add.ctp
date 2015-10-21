<section class="panel">
    <header class="panel-heading">
        <?php echo ($isEdit)?__('Edit Country'):__('Add Country'); ?>
    </header>
    <div class="panel-body">
        <?php 
            echo $this->Form->create($country,array(
                'class'     => 'form-horizontal',
                'type'      => 'post',
            ));
        ?>
        <div class="col-xs-8 col-xs-offset-2">
            <div class="form-group">
                <label class="col-xs-2 control-label"><?php echo __('Name'); ?></label>
                <div class="col-xs-10">
                    <?php 
                        echo $this->Form->text('name',array(
                            'class' => 'form-control'
                        ));
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2 control-label"><?php echo __('Slug'); ?></label>
                <div class="col-xs-10">
                    <?php 
                        echo $this->Form->text('slug',array(
                            'class' => 'form-control'
                        ));
                    ?>
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
        <?php 
            echo $this->Form->end();
        ?>
    </div>
</section>
