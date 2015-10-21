<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Merchant Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantCategories index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('merchant_id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($merchantCategories as $merchantCategory): ?>
        <tr>
            <td><?= $this->Number->format($merchantCategory->id) ?></td>
            <td>
                <?= $merchantCategory->has('merchant') ? $this->Html->link($merchantCategory->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $merchantCategory->merchant->id]) : '' ?>
            </td>
            <td>
                <?= $merchantCategory->has('category') ? $this->Html->link($merchantCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $merchantCategory->category->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $merchantCategory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $merchantCategory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $merchantCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchantCategory->id)]) ?>
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
