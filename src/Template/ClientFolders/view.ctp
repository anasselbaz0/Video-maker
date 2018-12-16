<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientFolder $clientFolder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client Folder'), ['action' => 'edit', $clientFolder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Folder'), ['action' => 'delete', $clientFolder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientFolder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Folders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Folder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientFolders view large-9 medium-8 columns content">
    <h3><?= h($clientFolder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $clientFolder->has('client') ? $this->Html->link($clientFolder->client->name, ['controller' => 'Clients', 'action' => 'view', $clientFolder->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientFolder->id) ?></td>
        </tr>
    </table>
</div>
