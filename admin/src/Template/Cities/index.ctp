<section class="panel">
    <header class="panel-heading">
        <?= __('Cities'); ?>
        <div class="pull-right">
            <a href="<?php echo $this->Url->build(['action'=>'add']); ?>" class="btn-sm btn-primary"><?= __('Add City'); ?></a>
        </div>
    </header>
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('state_id') ?></th>
                <th><?= $this->Paginator->sort('country_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cities as $city): ?>
            <tr>
                <td><?= $this->Number->format($city->id) ?></td>
                <td><?= h($city->name) ?></td>
                <td><?= h($city->slug) ?></td>
                <td>
                    <?= $city->has('state') ? $this->Html->link($city->state->name, ['controller' => 'States', 'action' => 'view', $city->state->id]) : '' ?>
                </td>
                <td>
                    <?= $city->has('country') ? $this->Html->link($city->country->name, ['controller' => 'Countries', 'action' => 'view', $city->country->id]) : '' ?>
                </td>
                <td><?= h($city->created) ?></td>
                <td><?= h($city->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $city->id]) ?>
                    &nbsp;|&nbsp;
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $city->id]) ?>
                    &nbsp;|&nbsp;
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    <div class="paginator text-center">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</section>
