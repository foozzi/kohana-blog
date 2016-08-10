<?php if($pagination -> getCurrentPage() == 1):?>
<b>1</b>
<?php else: ?>
<a href="?page=1">1</a>
<?php endif; ?>

<?php if($pagination -> getCurrentPage() != 1):?>
<a href="?page=<?=($pagination->getCurrentPage() - 1)?>">Предудущая</a>
<?php endif;?>

<?php if($pagination -> getCurrentPage() != 1 && $pagination -> getCurrentPage() != $pagination -> getTotalPagesCount()):?>
<b><?=$pagination->getCurrentPage()?></b>
<?php endif;?>

<?php if($pagination -> getCurrentPage() != $pagination->getTotalPagesCount()):?>
<a href="?page=<?=($pagination->getCurrentPage() + 1)?>">Следующая</a>
<?php endif;?>

<?php if($pagination->getTotalPagesCount() == $pagination->getCurrentPage()):?>
<b><?=$pagination->getTotalPagesCount()?></b>
<?php else: ?>
<a href="?page=<?=$pagination->getTotalPagesCount()?>"><?=$pagination->getTotalPagesCount()?></a>
<?php endif;?>
