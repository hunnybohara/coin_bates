<section class="panel">
<header class="panel-heading">
    <?= ($isCategory)?__('Categories'):__('Tags'); ?>
    <div class="pull-right">
        <a class="btn-sm btn-primary" href="<?php echo $this->Url->build(array('action'=>'add','type'=>$type)); ?>">
            <?php echo ($isCategory)?__('Add Catgory'):__('Add Tag'); ?>
        </a>
    </div>
</header>
<div class="panel-body">
    <table class="table table-bordered table-striped table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th><?= $this->Paginator->sort('parent') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($taxonomies as $taxonomy): ?>
        <tr>
            <td><?= $this->Number->format($taxonomy->id) ?></td>
            <td><?= h($taxonomy->name) ?></td>
            <td><?= h($taxonomy->slug) ?></td>
            <td><?= $this->Number->format($taxonomy->parent) ?></td>
            <td><?= h($taxonomy->type) ?></td>
            <td><?= h($taxonomy->created) ?></td>
            <td><?= h($taxonomy->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $taxonomy->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $taxonomy->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $taxonomy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxonomy->id)]) ?>
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
