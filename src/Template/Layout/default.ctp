<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?=
        $this->Html->css([
            'base.css'
            , 'style.css'
            , 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
        ]);
    ?>

    <?=
        $this->Html->script([
            'https://code.jquery.com/jquery-3.4.1.min.js'
            , 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ]);
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="overflow-auto container border p-0">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="navbar-nav">
          <li class="nav-item"><?= $this->Html->link('Menu 1', '/pages/menu1', ['class' => "nav-link"]) ?></li>
          <li class="nav-item"><?= $this->Html->link('Menu 2', '/pages/menu2', ['class' => "nav-link"]) ?></li>
          <li class="nav-item"><?= $this->Html->link('Menu 3', '/pages/menu3', ['class' => "nav-link"]) ?></li>
        </ul>
    </nav>

    <?= $this->Flash->render() ?>

    <div class="m-0 mt-3 p-4 bg-light"><?= $this->fetch('content') ?></div>

    <footer class="row col-lg-12"></footer>
</body>
</html>
