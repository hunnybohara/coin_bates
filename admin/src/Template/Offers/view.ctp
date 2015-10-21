<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Offer'), ['action' => 'edit', $offer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offer'), ['action' => 'delete', $offer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="offers view large-10 medium-9 columns">
    <h2><?= h($offer->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Merchant') ?></h6>
            <p><?= $offer->has('merchant') ? $this->Html->link($offer->merchant->id, ['controller' => 'Merchants', 'action' => 'view', $offer->merchant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($offer->title) ?></p>
            <h6 class="subheader"><?= __('Sub Title') ?></h6>
            <p><?= h($offer->sub_title) ?></p>
            <h6 class="subheader"><?= __('Link') ?></h6>
            <p><?= h($offer->link) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($offer->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($offer->id) ?></p>
            <h6 class="subheader"><?= __('Commision Offered') ?></h6>
            <p><?= $this->Number->format($offer->commision_offered) ?></p>
            <h6 class="subheader"><?= __('Commision Receivable') ?></h6>
            <p><?= $this->Number->format($offer->commision_receivable) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($offer->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($offer->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($offer->description)); ?>

        </div>
    </div>
</div>
