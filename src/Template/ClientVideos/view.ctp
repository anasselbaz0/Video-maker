<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientVideo $clientVideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client Video'), ['action' => 'edit', $clientVideo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Video'), ['action' => 'delete', $clientVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVideo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Folders'), ['controller' => 'ClientFolders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Folder'), ['controller' => 'ClientFolders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientVideos view large-9 medium-8 columns content">
    <h3><?= h($clientVideo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($clientVideo->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Folder') ?></th>
            <td><?= $clientVideo->has('client_folder') ? $this->Html->link($clientVideo->client_folder->id, ['controller' => 'ClientFolders', 'action' => 'view', $clientVideo->client_folder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientVideo->id) ?></td>
        </tr>
    </table>
</div>
