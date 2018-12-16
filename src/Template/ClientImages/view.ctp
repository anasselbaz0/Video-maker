<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientImage $clientImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client Image'), ['action' => 'edit', $clientImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Image'), ['action' => 'delete', $clientImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Folders'), ['controller' => 'ClientFolders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Folder'), ['controller' => 'ClientFolders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientImages view large-9 medium-8 columns content">
    <h3><?= h($clientImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($clientImage->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Folder') ?></th>
            <td><?= $clientImage->has('client_folder') ? $this->Html->link($clientImage->client_folder->id, ['controller' => 'ClientFolders', 'action' => 'view', $clientImage->client_folder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientImage->id) ?></td>
        </tr>
    </table>
</div>
