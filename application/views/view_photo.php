<?php 

foreach($items as $key => $item):

	$num = $item->num;
	$title = $item->title;
	$inning = $item->inning;
	$prize = $item->prize;
	$name = $item->name;
	$roadName = $item->roadName;

?>
<div class='pic'>
<?php if($inning<=10){ ?>
	<img src="<?php echo $base_url;?>assets/img/imgPrize/<?php echo $inning;?>th/<?php echo $num;?>.jpg">
<?php }else{?>
	<img src="<?php echo $base_url;?>assets/img/imgPrize/<?php echo $inning;?>th/<?php echo $num;?>.PNG">
<?php }?>
	<div id='tag' class="pic_<?php echo $inning;?>_<?php echo $num;?>">
		<input type="text" class="title" value="<?php echo $title;?>" readonly="readonly"/>
		<input type="hidden" class="prize" value="<?php echo $prize;?>" />
		<input type="hidden" class="name" value="<?php echo $name;?>" />
		<input type="hidden" class="roadName" value="<?php echo $roadName;?>" />
	</div>
</div>
<?php endforeach; ?>