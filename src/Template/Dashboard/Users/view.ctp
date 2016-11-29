<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staticpages'), ['controller' => 'Staticpages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpage'), ['controller' => 'Staticpages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($user->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($user->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($user->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tokenhash') ?></h4>
        <?= $this->Text->autoParagraph(h($user->tokenhash)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Staticpages') ?></h4>
        <?php if (!empty($user->staticpages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->staticpages as $staticpages): ?>
            <tr>
                <td><?= h($staticpages->id) ?></td>
                <td><?= h($staticpages->user_id) ?></td>
                <td><?= h($staticpages->position) ?></td>
                <td><?= h($staticpages->title) ?></td>
                <td><?= h($staticpages->image) ?></td>
                <td><?= h($staticpages->description) ?></td>
                <td><?= h($staticpages->status) ?></td>
                <td><?= h($staticpages->created) ?></td>
                <td><?= h($staticpages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Staticpages', 'action' => 'view', $staticpages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Staticpages', 'action' => 'edit', $staticpages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staticpages', 'action' => 'delete', $staticpages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staticpages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
