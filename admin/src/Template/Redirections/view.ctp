<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Redirection'), ['action' => 'edit', $redirection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Redirection'), ['action' => 'delete', $redirection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $redirection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Redirections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Redirection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="redirections view large-10 medium-9 columns">
    <h2><?= h($redirection->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $redirection->has('user') ? $this->Html->link($redirection->user->id, ['controller' => 'Users', 'action' => 'view', $redirection->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Signature') ?></h6>
            <p><?= h($redirection->signature) ?></p>
            <h6 class="subheader"><?= __('Offer') ?></h6>
            <p><?= $redirection->has('offer') ? $this->Html->link($redirection->offer->title, ['controller' => 'Offers', 'action' => 'view', $redirection->offer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Link') ?></h6>
            <p><?= h($redirection->link) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($redirection->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($redirection->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($redirection->modified) ?></p>
        </div>
    </div>
</div>
