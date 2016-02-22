<h1><?= $this->h1; ?></h1>

<?php $this->widget('OneTextbookWidget'); ?>

<div class="separator"></div>
<div class="clearfix"></div>

<?php if($embedConfigId): ?>
<iframe width="700" height="500" src="//e.issuu.com/embed.html#<?= $embedConfigId; ?>" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>

<div class="clearfix"></div>
<div class="separator"></div>

<div class="lead">Популярні підручники: </div>
<div class="book-list">
	<?php $this->widget('RelativeTextbooksWidget', array('mode'=>'all')); ?>
</div>

<div class="clearfix"></div>
<div class="separator"></div>

<div class="lead">Схожі підручники: </div>
<div class="book-list">
	<?php $this->widget('RelativeTextbooksWidget', array('mode'=>'clas')); ?>
</div>



	
