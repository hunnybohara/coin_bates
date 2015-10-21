<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Merchant Taxonomies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Taxonomies'), ['controller' => 'Taxonomies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taxonomy'), ['controller' => 'Taxonomies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantTaxonomies form large-10 medium-9 columns">
    <?= $this->Form->create($merchantTaxonomy); ?>
    <fieldset>
        <legend><?= __('Add Merchant Taxonomy') ?></legend>
        <?php
            echo $this->Form->input('taxonomy_id', ['options' => $taxonomies]);
            echo $this->Form->input('merchant_id', ['options' => $merchants]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
