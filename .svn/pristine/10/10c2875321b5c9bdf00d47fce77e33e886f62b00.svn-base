<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Email Params'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emailParams form large-10 medium-9 columns">
    <?= $this->Form->create($emailParam); ?>
    <fieldset>
        <legend><?= __('Add Email Param') ?></legend>
        <?php
            echo $this->Form->input('email_id', ['options' => $emails]);
            echo $this->Form->input('key');
            echo $this->Form->input('desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
