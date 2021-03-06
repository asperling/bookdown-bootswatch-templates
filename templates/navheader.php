<?php
/**
 * tobiju
 *
 * @link      https://github.com/tobiju/bookdown-bootswatch-templates for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 * @license   https://github.com/tobiju/bookdown-bootswatch-templates/blob/master/LICENSE.txt New BSD License
 */

$prev = $this->page->getPrev();
$parent = $this->page->getParent();
$next = $this->page->getNext();
?>

<header>
    <div class="container">
        <h3 class="title text-center">
            <?= $this->page->getNumberAndTitle(); ?>
        </h3>
    </div>
    <div class="links">
        <div class="container">
            <?= $this->render("nav"); ?>
        </div>
    </div>
</header>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

