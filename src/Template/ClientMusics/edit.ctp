<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientMusic $clientMusic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientMusic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientMusic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Musics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Folders'), ['controller' => 'ClientFolders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Folder'), ['controller' => 'ClientFolders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientMusics form large-9 medium-8 columns content">
    <?= $this->Form->create($clientMusic) ?>
    <fieldset>
        <legend><?= __('Edit Client Music') ?></legend>
        <?php
            echo $this->Form->control('path');
            echo $this->Form->control('client_folders_id', ['options' => $clientFolders]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
