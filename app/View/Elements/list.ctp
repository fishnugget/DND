<?php
echo $this->Html->css('list');
?>


<div class="list subpage">
	<?php foreach($list as $key=>$list_item): ?>
    <div class="list-item">
    	<?php if(isset($list_item['image'])): ?>
        	<div class="list-image left">
            	<img src="img/logos/<?php echo $list_item['image']; ?>" />
            </div>
        <?php endif; ?>
        <div class="list-body-container left">
        <?php if(isset($list_item['title'])): ?>
        	<div class="title">
            	<a href="/places/view/nashville/midtown/519_green"><?php echo strtoupper($list_item['title']); ?></a>
            </div>
        <?php endif; ?>
        
        <?php if(isset($list_item['body'])): ?>
        	<div class="body">
            	<?php echo strtoupper($list_item['body']); ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>