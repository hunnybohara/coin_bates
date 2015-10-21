<section class="panel">
    <header class="panel-heading">
        <?= __('Countries'); ?>
        <div class="pull-right">
            <a href="<?php echo $this->Url->build(['action'=>'add']); ?>" class="btn-sm btn-primary"><?= __('Add Country'); ?></a>
        </div>
    </header>
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= $this->Number->format($country->id) ?></td>
                <td><?= h($country->name) ?></td>
                <td><?= h($country->slug) ?></td>
                <td><?= h($country->created) ?></td>
                <td><?= h($country->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                    &nbsp;|&nbsp;
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                    &nbsp;|&nbsp;
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
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
    
