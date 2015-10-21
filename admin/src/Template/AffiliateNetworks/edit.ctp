<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $affiliateNetwork->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $affiliateNetwork->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Affiliate Networks'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="affiliateNetworks form large-10 medium-9 columns">
    <?= $this->Form->create($affiliateNetwork); ?>
    <fieldset>
        <legend><?= __('Edit Affiliate Network') ?></legend>
        <?php
            echo $this->Form->input('network_name');
            echo $this->Form->input('terms');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
