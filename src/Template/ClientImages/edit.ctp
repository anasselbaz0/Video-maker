<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientImage $clientImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Folders'), ['controller' => 'ClientFolders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Folder'), ['controller' => 'ClientFolders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientImages form large-9 medium-8 columns content">
    <?= $this->Form->create($clientImage) ?>
    <fieldset>
        <legend><?= __('Edit Client Image') ?></legend>
        <?php
            echo $this->Form->control('path');
            echo $this->Form->control('client_folders_id', ['options' => $clientFolders]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
