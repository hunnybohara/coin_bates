<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $taxonomy->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $taxonomy->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Taxonomies'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="taxonomies form large-10 medium-9 columns">
    <?= $this->Form->create($taxonomy); ?>
    <fieldset>
        <legend><?= __('Edit Taxonomy') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('parent');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
