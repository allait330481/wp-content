<?php
/** @var array $buttonGroup */
?>

<div class="button-group">
    <?php foreach($buttonGroup as $button): ?>
        <?php render('views/atoms/button.php', compact('button'))?>
    <?php endforeach;?>
</div>
