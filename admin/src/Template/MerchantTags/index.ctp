<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Merchant Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('merchant_id') ?></th>
            <th><?= $this->Paginator->sort('tag_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($merchantTags as $merchantTag): ?>
        <tr>
            <td><?= $this->Number->format($merchantTag->id) ?></td>
            <td>
                <?= $merchantTag->has('merchant') ? $this->Html->link($merchantTag->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $merchantTag->merchant->id]) : '' ?>
            </td>
            <td>
                <?= $merchantTag->has('tag') ? $this->Html->link($merchantTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $merchantTag->tag->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $merchantTag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $merchantTag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $merchantTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchantTag->id)]) ?>
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
