<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $merchantTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $merchantTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Merchant Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantTags form large-10 medium-9 columns">
    <?= $this->Form->create($merchantTag); ?>
    <fieldset>
        <legend><?= __('Edit Merchant Tag') ?></legend>
        <?php
            echo $this->Form->input('merchant_id', ['options' => $merchants]);
            echo $this->Form->input('tag_id', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
