<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Email Param'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emailParams index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('email_id') ?></th>
            <th><?= $this->Paginator->sort('key') ?></th>
            <th><?= $this->Paginator->sort('desc') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($emailParams as $emailParam): ?>
        <tr>
            <td><?= $this->Number->format($emailParam->id) ?></td>
            <td>
                <?= $emailParam->has('email') ? $this->Html->link($emailParam->email->id, ['controller' => 'Emails', 'action' => 'view', $emailParam->email->id]) : '' ?>
            </td>
            <td><?= h($emailParam->key) ?></td>
            <td><?= h($emailParam->desc) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $emailParam->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailParam->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emailParam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailParam->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
