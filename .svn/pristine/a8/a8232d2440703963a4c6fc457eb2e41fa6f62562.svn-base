<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Email Param'), ['action' => 'edit', $emailParam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email Param'), ['action' => 'delete', $emailParam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailParam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Email Params'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email Param'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emailParams view large-10 medium-9 columns">
    <h2><?= h($emailParam->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= $emailParam->has('email') ? $this->Html->link($emailParam->email->id, ['controller' => 'Emails', 'action' => 'view', $emailParam->email->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Key') ?></h6>
            <p><?= h($emailParam->key) ?></p>
            <h6 class="subheader"><?= __('Desc') ?></h6>
            <p><?= h($emailParam->desc) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($emailParam->id) ?></p>
        </div>
    </div>
</div>
