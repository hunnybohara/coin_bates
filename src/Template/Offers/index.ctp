
<div class="offers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('merchant_id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('commision_offered') ?></th>
            <th><?= $this->Paginator->sort('commision_receivable') ?></th>
            <th><?= $this->Paginator->sort('link') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($offers as $offer): ?>
        <tr>
            <td><?= $this->Number->format($offer->id) ?></td>
            <td>
                <?= $offer->has('merchant') ? $this->Html->link($offer->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $offer->merchant->id]) : '' ?>
            </td>
            <td><?= h($offer->title) ?></td>
            <td><?= $this->Number->format($offer->commision_offered) ?></td>
            <td><?= $this->Number->format($offer->commision_receivable) ?></td>
            <td><?= h($offer->link) ?></td>
            <td><?= h($offer->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $offer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]) ?>
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
