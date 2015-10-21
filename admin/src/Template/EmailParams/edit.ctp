<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emailParam->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emailParam->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Email Params'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emailParams form large-10 medium-9 columns">
    <?= $this->Form->create($emailParam); ?>
    <fieldset>
        <legend><?= __('Edit Email Param') ?></legend>
        <?php
            echo $this->Form->input('email_id', ['options' => $emails]);
            echo $this->Form->input('key');
            echo $this->Form->input('desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
