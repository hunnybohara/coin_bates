<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Merchant'), ['action' => 'edit', $merchant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merchant'), ['action' => 'delete', $merchant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Affiliate Networks'), ['controller' => 'AffiliateNetworks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliate Network'), ['controller' => 'AffiliateNetworks', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchants view large-10 medium-9 columns">
    <h2><?= h($merchant->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Merchant Name') ?></h6>
            <p><?= h($merchant->name) ?></p>
            <h6 class="subheader"><?= __('Aff Link') ?></h6>
            <p><?= h($merchant->aff_link) ?></p>
            <h6 class="subheader"><?= __('Affiliate Network') ?></h6>
            <p><?= $merchant->has('affiliate_network') ? $this->Html->link($merchant->affiliate_network->id, ['controller' => 'AffiliateNetworks', 'action' => 'view', $merchant->affiliate_network->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($merchant->id) ?></p>
            <h6 class="subheader"><?= __('Payment Terms') ?></h6>
            <p><?= $this->Number->format($merchant->payment_terms) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Number->format($merchant->status) ?></p>
            <h6 class="subheader"><?= __('Commision') ?></h6>
            <p><?= $this->Number->format($merchant->commision) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($merchant->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($merchant->modified) ?></p>
        </div>
    </div>
</div>
