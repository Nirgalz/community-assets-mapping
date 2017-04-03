<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Metatag'), ['action' => 'edit', $metatag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Metatag'), ['action' => 'delete', $metatag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $metatag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Metatags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Metatag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Tags'), ['controller' => 'UsersTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Tag'), ['controller' => 'UsersTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="metatags view large-9 medium-8 columns content">
    <h3><?= h($metatag->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($metatag->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($metatag->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($metatag->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users Tags') ?></h4>
        <?php if (!empty($metatag->users_tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Tag Id') ?></th>
                <th scope="col"><?= __('Metatag Id') ?></th>
                <th scope="col"><?= __('Level') ?></th>
                <th scope="col"><?= __('Community Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($metatag->users_tags as $usersTags): ?>
            <tr>
                <td><?= h($usersTags->id) ?></td>
                <td><?= h($usersTags->user_id) ?></td>
                <td><?= h($usersTags->tag_id) ?></td>
                <td><?= h($usersTags->metatag_id) ?></td>
                <td><?= h($usersTags->level) ?></td>
                <td><?= h($usersTags->community_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsersTags', 'action' => 'view', $usersTags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersTags', 'action' => 'edit', $usersTags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersTags', 'action' => 'delete', $usersTags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
