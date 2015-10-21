<section class="panel">
    <header class="panel-heading">
        <?= __('Files'); ?>
    </header>
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th>&nbsp;</th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('mime_type') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($files as $file): ?>
        <tr>
            <td><?= $this->Number->format($file->id) ?></td>
            <td><?= $this->Html->image($file->getImgUrl(75)); ?></td>
            <td><?= h($file->name) ?></td>
            <td><?= h($file->mime_type) ?></td>
            <td>
                <?= $file->has('user') ? $this->Html->link($file->user->id, ['controller' => 'Users', 'action' => 'view', $file->user->id]) : '' ?>
            </td>
            <td><?= h($file->created) ?></td>
            <td><?= h($file->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $file->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $file->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]) ?>
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
