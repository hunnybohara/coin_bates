<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Merchant Taxonomy'), ['action' => 'edit', $merchantTaxonomy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merchant Taxonomy'), ['action' => 'delete', $merchantTaxonomy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchantTaxonomy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merchant Taxonomies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant Taxonomy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Taxonomies'), ['controller' => 'Taxonomies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taxonomy'), ['controller' => 'Taxonomies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantTaxonomies view large-10 medium-9 columns">
    <h2><?= h($merchantTaxonomy->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Taxonomy') ?></h6>
            <p><?= $merchantTaxonomy->has('taxonomy') ? $this->Html->link($merchantTaxonomy->taxonomy->name, ['controller' => 'Taxonomies', 'action' => 'view', $merchantTaxonomy->taxonomy->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Merchant') ?></h6>
            <p><?= $merchantTaxonomy->has('merchant') ? $this->Html->link($merchantTaxonomy->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $merchantTaxonomy->merchant->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($merchantTaxonomy->id) ?></p>
        </div>
    </div>
</div>
