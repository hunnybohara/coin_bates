<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="offers form large-10 medium-9 columns">
    <?= $this->Form->create($offer); ?>
    <fieldset>
        <legend><?= __('Edit Offer') ?></legend>
        <?php
            echo $this->Form->input('merchant_id', ['options' => $merchants]);
            echo $this->Form->input('title');
            echo $this->Form->input('sub_title');
            echo $this->Form->input('description');
            echo $this->Form->input('commision_offered');
            echo $this->Form->input('commision_receivable');
            echo $this->Form->input('link');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
