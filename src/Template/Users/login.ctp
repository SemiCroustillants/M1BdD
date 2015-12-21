<?php
$this->assign('title', $h1);
?>
<article>
    <?= $this->Form->create($user) ?>
    <?= $this->Form->input('email', ['label' => __('Adresse email')]) ?>
    <?= $this->Form->input('password', ['label' => __('Mot de passe')]) ?>
    <?= $this->Form->submit(__('Connecter')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link(__('Pas encore de compte ?'), ['controller' => 'users', 'action' => 'add']) ?>
</article>