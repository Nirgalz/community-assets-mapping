<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Tag'), ['action' => 'edit', $usersTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Tag'), ['action' => 'delete', $usersTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersTags view large-9 medium-8 columns content">
    <h3><?= h($usersTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersTag->has('user') ? $this->Html->link($usersTag->user->id, ['controller' => 'Users', 'action' => 'view', $usersTag->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $usersTag->has('tag') ? $this->Html->link($usersTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $usersTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metatag') ?></th>
            <td><?= h($usersTag->metatag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersTag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($usersTag->level) ?></td>
        </tr>
    </table>
</div>
