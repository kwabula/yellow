<div class="navigation">
<ul>
<?php foreach($yellow->pages->root() as $page): ?>
<li><a<?php echo $page->isActive() ? " class=\"active\"" : "" ?> href="<?php echo $page->getLocation() ?>"><?php echo $page->getTitle() ?></a></li>
<?php endforeach ?>
</ul>
</div>