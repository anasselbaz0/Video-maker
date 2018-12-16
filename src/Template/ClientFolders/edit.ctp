<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientFolder $clientFolder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientFolder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientFolder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Folders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientFolders form large-9 medium-8 columns content">
    <?= $this->Form->create($clientFolder) ?>
    <fieldset>
        <legend><?= __('Edit Client Folder') ?></legend>
        <?php
            echo $this->Form->control('clients_id', ['options' => $clients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
