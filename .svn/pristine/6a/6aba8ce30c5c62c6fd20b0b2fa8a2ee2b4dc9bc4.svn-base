<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Merchant Taxonomy'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Taxonomies'), ['controller' => 'Taxonomies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taxonomy'), ['controller' => 'Taxonomies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="merchantTaxonomies index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('taxonomy_id') ?></th>
            <th><?= $this->Paginator->sort('merchant_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($merchantTaxonomies as $merchantTaxonomy): ?>
        <tr>
            <td><?= $this->Number->format($merchantTaxonomy->id) ?></td>
            <td>
                <?= $merchantTaxonomy->has('taxonomy') ? $this->Html->link($merchantTaxonomy->taxonomy->name, ['controller' => 'Taxonomies', 'action' => 'view', $merchantTaxonomy->taxonomy->id]) : '' ?>
            </td>
            <td>
                <?= $merchantTaxonomy->has('merchant') ? $this->Html->link($merchantTaxonomy->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $merchantTaxonomy->merchant->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $merchantTaxonomy->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $merchantTaxonomy->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $merchantTaxonomy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchantTaxonomy->id)]) ?>
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
