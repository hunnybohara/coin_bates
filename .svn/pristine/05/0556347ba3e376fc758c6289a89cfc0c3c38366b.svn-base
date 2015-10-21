<section class="panel">
    <header class="panel-heading">
        <?= __('Redirections'); ?>
    </header>
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('signature') ?></th>
            <th><?= $this->Paginator->sort('offer_id') ?></th>
            <th><?= $this->Paginator->sort('link') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($redirections as $redirection): ?>
        <tr>
            <td><?= $this->Number->format($redirection->id) ?></td>
            <td>
                <?= $redirection->has('user') ? $this->Html->link($redirection->user->name, ['controller' => 'Users', 'action' => 'view', $redirection->user->id]) : '' ?>
            </td>
            <td><?= h($redirection->signature) ?></td>
            <td>
                <?= $redirection->has('offer') ? $this->Html->link($redirection->offer->title, ['controller' => 'Offers', 'action' => 'view', $redirection->offer->id]) : '' ?>
            </td>
            <td><?= h($redirection->link) ?></td>
            <td><?= h($redirection->created) ?></td>
            <td><?= h($redirection->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $redirection->id]) ?>
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
