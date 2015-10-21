<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Merchant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Affiliate Networks'), ['controller' => 'AffiliateNetworks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affiliate Network'), ['controller' => 'AffiliateNetworks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="merchants index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('merchant_name') ?></th>
            <th><?= $this->Paginator->sort('logo') ?></th>
            <th><?= $this->Paginator->sort('aff_link') ?></th>
            <th><?= $this->Paginator->sort('payment_terms') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($merchants as $merchant): ?>
        <tr>
            <td><?= $this->Number->format($merchant->id) ?></td>
            <td><?= h($merchant->merchant_name) ?></td>
            <td><?= $this->Number->format($merchant->logo) ?></td>
            <td><?= h($merchant->aff_link) ?></td>
            <td><?= h($merchant->payment_terms) ?></td>
            <td><?= h($merchant->status) ?></td>
            <td><?= h($merchant->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $merchant->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $merchant->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $merchant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchant->id)]) ?>
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
