<section class="panel">
<header class="panel-heading">
    <?php echo __('Merchants'); ?>
    <div class="pull-right">
        <a class="btn-sm btn-primary" href="<?php echo $this->Url->build(array('action'=>'add')); ?>">
            <?php echo __('Add Merchant'); ?>
        </a>
    </div>
</header>
<div class="panel-body">
    <table class="table table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th>&nbsp;</th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php if(count($merchants)>0) : ?>
    <?php foreach ($merchants as $merchant):   ?>
        <tr>
            <td><?= $this->Number->format($merchant->id) ?></td>
            <td><?= $this->Html->image($merchant->getLogoFile()->getImgUrl(150)); ?></td>
            <td><?= h($merchant->name) ?></td>
            <td><?= h($merchant->status) ?></td>
            <td><?= h($merchant->created) ?></td>
            <td><?= h($merchant->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), $this->Html->getMerchantFrontUrl($merchant->id),['target'=>'_blank']) ?>
                &nbsp;|&nbsp;
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $merchant->id]) ?>
                &nbsp;|&nbsp;
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $merchant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchant->id)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td align="center" colspan="8"><?= __('No Merchant(s) found !'); ?></td>
        </tr>
    <?php endif; ?>
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
