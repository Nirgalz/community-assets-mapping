<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersTags index large-9 medium-8 columns content">
    <h3><?= __('Users Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metatag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersTags as $usersTag): ?>
            <tr>
                <td><?= $this->Number->format($usersTag->id) ?></td>
                <td><?= $usersTag->has('user') ? $this->Html->link($usersTag->user->id, ['controller' => 'Users', 'action' => 'view', $usersTag->user->id]) : '' ?></td>
                <td><?= $usersTag->has('tag') ? $this->Html->link($usersTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $usersTag->tag->id]) : '' ?></td>
                <td><?= h($usersTag->metatag) ?></td>
                <td><?= $this->Number->format($usersTag->level) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTag->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
