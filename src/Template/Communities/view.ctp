<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Community'), ['action' => 'edit', $community->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Community'), ['action' => 'delete', $community->id], ['confirm' => __('Are you sure you want to delete # {0}?', $community->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Communities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Community'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Tags'), ['controller' => 'UsersTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Tag'), ['controller' => 'UsersTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="communities view large-9 medium-8 columns content">
    <h3><?= h($community->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($community->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($community->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Story') ?></h4>
        <?= $this->Text->autoParagraph(h($community->story)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users Tags') ?></h4>
        <?php if (!empty($community->users_tags)): ?>
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
            <?php foreach ($community->users_tags as $usersTags): ?>
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
