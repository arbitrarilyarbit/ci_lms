<ul>
<?php foreach ($menu_items as $item) { ?>

	<li>
	    <?php if (isset($item['href'])) { ?>
	    <?php echo anchor($item['href'], $item['title']); ?>
		<?php } else { ?>
	    <a href="#"><?php echo $item['title']; ?></a>
	    <?php } ?>
	</li>

<?php } ?>
</ul>
