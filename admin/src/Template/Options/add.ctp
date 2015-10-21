<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Options'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="options form large-10 medium-9 columns">
    <?= $this->Form->create($option); ?>
    <fieldset>
        <legend><?= __('Add Option') ?></legend>
        <?php
            echo $this->Form->input('option_name');
            echo $this->Form->input('option_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
