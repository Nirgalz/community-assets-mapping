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
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
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
        <h4><?= __('Related assets') ?></h4>
        <?php if (!empty($community->users_tags)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('name') ?></th>
                    <th scope="col"><?= __('metatag') ?></th>

                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php debug($community->users_tags) ?>
                <?php foreach ($community->users_tags as $tag): ?>
                    <tr>
                        <td><?= h($tag->id) ?></td>
                        <td><?= h($tag->name) ?></td>
                        <td><?= h($tag->metatag) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tag->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tag->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
