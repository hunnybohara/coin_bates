<section class="panel">
<header class="panel-heading">
    <?php echo __('Emails'); ?>
    <div class="pull-right">
        <a class="btn-sm btn-primary" href="<?php echo $this->Url->build(array('action'=>'add')); ?>">
            <?php echo __('Add Email'); ?>
        </a>
    </div>
</header>
<div class="panel-body">
    <table class="table table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('code') ?></th>
            <th><?= $this->Paginator->sort('subject') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($emails as $email): ?>
        <tr>
            <td><?= $this->Number->format($email->id) ?></td>
            <td><?= h($email->code) ?></td>
            <td><?= h($email->subject) ?></td>
            <td><?= h($email->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $email->id]) ?>
                &nbsp;|&nbsp;
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?>
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
</section>
