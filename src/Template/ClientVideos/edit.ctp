<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientVideo $clientVideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientVideo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientVideo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Folders'), ['controller' => 'ClientFolders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Folder'), ['controller' => 'ClientFolders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientVideos form large-9 medium-8 columns content">
    <?= $this->Form->create($clientVideo) ?>
    <fieldset>
        <legend><?= __('Edit Client Video') ?></legend>
        <?php
            echo $this->Form->control('path');
            echo $this->Form->control('client_folders_id', ['options' => $clientFolders]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
