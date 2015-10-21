<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Merchant Category'), ['action' => 'edit', $merchantCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merchant Category'), ['action' => 'delete', $merchantCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchantCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merchant Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantCategories view large-10 medium-9 columns">
    <h2><?= h($merchantCategory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Merchant') ?></h6>
            <p><?= $merchantCategory->has('merchant') ? $this->Html->link($merchantCategory->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $merchantCategory->merchant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $merchantCategory->has('category') ? $this->Html->link($merchantCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $merchantCategory->category->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($merchantCategory->id) ?></p>
        </div>
    </div>
</div>
