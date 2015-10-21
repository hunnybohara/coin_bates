<section class="panel">
    <header class="panel-heading">
        <?= __('All Offers'); ?>
        <div class="pull-right">
            <a class="btn-sm btn-primary" href="<?php echo $this->Url->build(array('action'=>'add')); ?>">
                <?php echo __('Add Offer'); ?>
            </a>
        </div>
    </header>
    <div class="panel-body">
    <table class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('merchant_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('commision_offered') ?></th>
                <th><?= $this->Paginator->sort('commision_receivable') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
    <tbody>
    <?php foreach ($offers as $offer): ?>
        <tr>
            <td><?= $this->Number->format($offer->id) ?></td>
            <td>
                <?= $offer->has('merchant') ? $this->Html->link($offer->merchant->name, ['controller' => 'Merchants', 'action' => 'edit', $offer->merchant->id]) : '' ?>
            </td>
            <td><?= h($offer->title) ?></td>
            <td><?= $this->Number->format($offer->commision_offered) ?></td>
            <td><?= $this->Number->format($offer->commision_receivable) ?></td>
            <td><?= h($offer->status) ?></td>
            <td><?= h($offer->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), $this->Html->getOfferFrontUrl($offer->id),['target'=>'_blank']) ?>
                &nbsp;&nbsp;
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offer->id]) ?>
                &nbsp;&nbsp;
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
</section>
