<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bitcoin Accounts'), ['controller' => 'BitcoinAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bitcoin Account'), ['controller' => 'BitcoinAccounts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($user->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($user->last_name) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related BitcoinAccounts') ?></h4>
    <?php if (!empty($user->bitcoin_accounts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Wallet Address') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->bitcoin_accounts as $bitcoinAccounts): ?>
        <tr>
            <td><?= h($bitcoinAccounts->id) ?></td>
            <td><?= h($bitcoinAccounts->user_id) ?></td>
            <td><?= h($bitcoinAccounts->wallet_address) ?></td>
            <td><?= h($bitcoinAccounts->created) ?></td>
            <td><?= h($bitcoinAccounts->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'BitcoinAccounts', 'action' => 'view', $bitcoinAccounts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'BitcoinAccounts', 'action' => 'edit', $bitcoinAccounts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BitcoinAccounts', 'action' => 'delete', $bitcoinAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bitcoinAccounts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
