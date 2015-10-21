<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Email Params'), ['controller' => 'EmailParams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email Param'), ['controller' => 'EmailParams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emails view large-10 medium-9 columns">
    <h2><?= h($email->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Code') ?></h6>
            <p><?= h($email->code) ?></p>
            <h6 class="subheader"><?= __('Subject') ?></h6>
            <p><?= h($email->subject) ?></p>
            <h6 class="subheader"><?= __('Params') ?></h6>
            <p><?= h($email->params) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($email->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($email->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($email->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Message') ?></h6>
            <?= $this->Text->autoParagraph(h($email->message)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related EmailParams') ?></h4>
    <?php if (!empty($email->email_params)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Email Id') ?></th>
            <th><?= __('Key') ?></th>
            <th><?= __('Desc') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($email->email_params as $emailParams): ?>
        <tr>
            <td><?= h($emailParams->id) ?></td>
            <td><?= h($emailParams->email_id) ?></td>
            <td><?= h($emailParams->key) ?></td>
            <td><?= h($emailParams->desc) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'EmailParams', 'action' => 'view', $emailParams->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'EmailParams', 'action' => 'edit', $emailParams->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmailParams', 'action' => 'delete', $emailParams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailParams->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
