<?php head(array('title'=>"Item #{$item->id}")); ?>
<div id="primary">
<h2><?php echo h($item->title); ?></h2>
<h3>Description</h3>
<?php echo nls2p($item->description); ?>

<?php// echo section_nav(); ?>
</div>
<?php foot(); ?>