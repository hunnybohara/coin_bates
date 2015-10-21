<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Taxonomy'), ['action' => 'edit', $taxonomy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Taxonomy'), ['action' => 'delete', $taxonomy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxonomy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Taxonomies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taxonomy'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="taxonomies view large-10 medium-9 columns">
    <h2><?= h($taxonomy->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($taxonomy->name) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($taxonomy->slug) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($taxonomy->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($taxonomy->id) ?></p>
            <h6 class="subheader"><?= __('Parent') ?></h6>
            <p><?= $this->Number->format($taxonomy->parent) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($taxonomy->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($taxonomy->modified) ?></p>
        </div>
    </div>
</div>
