<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Affiliate Network'), ['action' => 'edit', $affiliateNetwork->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Affiliate Network'), ['action' => 'delete', $affiliateNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliateNetwork->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Affiliate Networks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliate Network'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="affiliateNetworks view large-10 medium-9 columns">
    <h2><?= h($affiliateNetwork->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Network Name') ?></h6>
            <p><?= h($affiliateNetwork->network_name) ?></p>
            <h6 class="subheader"><?= __('Terms') ?></h6>
            <p><?= h($affiliateNetwork->terms) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($affiliateNetwork->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($affiliateNetwork->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($affiliateNetwork->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($affiliateNetwork->modified) ?></p>
        </div>
    </div>
</div>
