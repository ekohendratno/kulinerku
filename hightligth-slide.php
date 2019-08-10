<div id="slider">
<div id="featured">
<?php 
$i = 0;
for( $x = 0; $x<=3; $x++ ){
	
$thumb = './images/makanan.jpg'; 

if( $i != 0 ) $style = 'ui-tabs-hide';

?>
<div id="post-<?php echo $i?>" class="ui-tabs-panel<?php echo $style;?>" style="">
<a href="#" rel="bookmark"><img src="thumb.php?src=<?php echo $thumb;?>&size=565x236" alt="" style="width:565px; height:236px;"></a>
<div class="info">
<h2><a href="#" rel="bookmark">RM Haji Imron <?php echo $x;?></a></h2>
</div>
</div>
<?php
$i++;
}
?>
<ul class="ui-tabs-nav">
<?php 
for( $x = 0; $x<=3; $x++ ){
	
$thumb = './images/makanan.jpg'; 
?>
<li class="ui-tabs-nav-item" id="nav-post-<?php echo $x?>">
<a href="#post-<?php echo $x?>"><img src="thumb.php?src=<?php echo $thumb;?>&size=80x44" alt="" style="width:80px; height:44px;"></a>
</li>
<?php
}
?>
</ul>
</div>
</div>