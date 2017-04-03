<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Add Tag') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('users.0.id',[
                'type' => 'number'
                ]);
        echo $this->Form->control('users.0.community_id');

        echo $this->Form->control('users.0._joinData.metatag', [
                'type' => 'radio',
                'options' => ['NEED','CAN','HAVE']
            ]);
            echo $this->Form->control('users.0._joinData.level', [
                'type' => 'radio',
                'options' => [1, 2, 3]
            ]);


        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
