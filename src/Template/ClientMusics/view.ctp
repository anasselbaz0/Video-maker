<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientMusic $clientMusic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client Music'), ['action' => 'edit', $clientMusic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Music'), ['action' => 'delete', $clientMusic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientMusic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Musics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Music'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Folders'), ['controller' => 'ClientFolders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Folder'), ['controller' => 'ClientFolders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientMusics view large-9 medium-8 columns content">
    <h3><?= h($clientMusic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($clientMusic->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Folder') ?></th>
            <td><?= $clientMusic->has('client_folder') ? $this->Html->link($clientMusic->client_folder->id, ['controller' => 'ClientFolders', 'action' => 'view', $clientMusic->client_folder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientMusic->id) ?></td>
        </tr>
    </table>
</div>
