<section class="panel">
    <header class="panel-heading">
        <?= __('States'); ?>
        <div class="pull-right">
            <a class="btn-sm btn-primary" href="<?php echo $this->Url->build(['action'=>'add']); ?>">
                <?php echo __('Add State')?>
            </a>
        </div>
    </header>
    <div class="panel-body">
    <table class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('country_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
    <tbody>
    <?php foreach ($states as $state): ?>
        <tr>
            <td><?= $this->Number->format($state->id) ?></td>
            <td><?= h($state->name) ?></td>
            <td><?= h($state->slug) ?></td>
            <td>
                <?= $state->has('country') ? $this->Html->link($state->country->name, ['controller' => 'Countries', 'action' => 'view', $state->country->id]) : '' ?>
            </td>
            <td><?= h($state->created) ?></td>
            <td><?= h($state->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $state->id]) ?>
                &nbsp;|&nbsp;
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $state->id]) ?>
                &nbsp;|&nbsp;
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="text-center">
        <ul class="pagination">
        <?php 
            echo $this->Paginator->numbers(array(
                'tag'               => 'li',
                'currentClass'      => 'active',
                'currentTag'        => 'a',
                'separator'         => '',
            )); 
        ?>
        </ul>
    </div>
    </div>
</section>
