<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientFolder[]|\Cake\Collection\CollectionInterface $clientFolders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client Folder'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientFolders index large-9 medium-8 columns content">
    <h3><?= __('Client Folders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clients_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientFolders as $clientFolder): ?>
            <tr>
                <td><?= $this->Number->format($clientFolder->id) ?></td>
                <td><?= $clientFolder->has('client') ? $this->Html->link($clientFolder->client->name, ['controller' => 'Clients', 'action' => 'view', $clientFolder->client->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clientFolder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientFolder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientFolder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientFolder->id)]) ?>
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
