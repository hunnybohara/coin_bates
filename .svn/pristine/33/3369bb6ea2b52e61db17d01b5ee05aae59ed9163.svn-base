
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $merchant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $merchant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Affiliate Networks'), ['controller' => 'AffiliateNetworks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliate Network'), ['controller' => 'AffiliateNetworks', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchants form large-10 medium-9 columns">
    <?= $this->Form->create($merchant); ?>
    <fieldset>
        <legend><?= __('Edit Merchant') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('aff_link');
            echo $this->Form->input('payment_terms');
            echo $this->Form->input('status');
            echo $this->Form->input('network_id', ['options' => $affiliateNetworks]);
            echo $this->Form->input('commision');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
