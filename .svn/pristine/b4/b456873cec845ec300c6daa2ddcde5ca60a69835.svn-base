<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Merchant Tag'), ['action' => 'edit', $merchantTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merchant Tag'), ['action' => 'delete', $merchantTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchantTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merchant Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantTags view large-10 medium-9 columns">
    <h2><?= h($merchantTag->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Merchant') ?></h6>
            <p><?= $merchantTag->has('merchant') ? $this->Html->link($merchantTag->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $merchantTag->merchant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $merchantTag->has('tag') ? $this->Html->link($merchantTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $merchantTag->tag->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($merchantTag->id) ?></p>
        </div>
    </div>
</div>
