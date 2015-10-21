<section class="panel">
    <header class="panel-heading">
        <?php echo __('Affiliation Networks'); ?>
            <div class="pull-right">
                <a class="btn-sm btn-primary" href="<?php echo $this->Url->build(array('action'=>'add')); ?>">
                    <?php echo __('Add Network'); ?>
                </a>
            </div>
    </header>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        <?= $this->Paginator->sort('id') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('name') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('created') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('modified') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('status') ?>
                    </th>
                    <th class="actions">
                        <?= __('Actions') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($affiliateNetworks)>0) : ?>
                    <?php foreach ($affiliateNetworks as $affiliateNetwork): ?>
                        <tr>
                            <td>
                                <?= $this->Number->format($affiliateNetwork->id) ?>
                            </td>
                            <td>
                                <?= h($affiliateNetwork->name) ?>
                            </td>
                            <td>
                                <?= h($affiliateNetwork->created) ?>
                            </td>
                            <td>
                                <?= h($affiliateNetwork->modified) ?>
                            </td>
                            <td>
                                <?= h($affiliateNetwork->status) ?>
                            </td>
                            <td class="actions">
                                <?php //echo '<span class="fa fa-eye">';?>
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $affiliateNetwork->id]) ?>
                                        &nbsp;|&nbsp;
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affiliateNetwork->id]) ?>
                                            &nbsp;|&nbsp;
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affiliateNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliateNetwork->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td align="center" colspan="8">
                                        <?= __('No Network(s) found !'); ?>
                                    </td>
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
            <p>
                <?= $this->Paginator->counter() ?>
            </p>
        </div>
    </div>
</section>