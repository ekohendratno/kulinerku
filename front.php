<div id="newfeed">
<div id="box">
	<div class="box-title">Berita terbaru <a href="#" class="right">Semua &raquo;</a></div>
    <div class="box-content">    
    	<?php 
		$style_box = '';
		for( $i=0; $i<=4; $i++){?>
    	<!--kuliner item start-->
    	<?php
		$thumb = './images/makanan.jpg'; 
		$style_box  = empty ($style_box) ? ' active' : '';
		?>
        <div class="kuliner-item<?php echo $style_box;?>">
        <a href="#"><img class="kuliner-item-thumb" src="thumb.php?src=<?php echo $thumb;?>&size=180x120" alt="" style="width:180px; height:120px;"/></a>
        <div class="kuliner-item-content">
        	<a href="#"><div class="kuliner-item-content-title">RM Lamo keterangan dari RM Lamo</div></a>
        	<div class="kuliner-item-content-desc">keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo keterangan dari RM Lamo</div>
        	<div class="kuliner-item-content-date">
                <span class="author">oleh: eko</span>
            	<span class="time">12 Agustus 2013</span>
            </div>
        </div>
        <div style="clear:both"></div>
        </div>        
        <div style="clear:both"></div>
        <?php }?>
    </div>
    <div class="pagination">
    <ul id="pagination-digg">
      <li class="previous-off left">&laquo; Sebelumnya</li>
      <li class="next right"><a href="?page=8">Berikutnya &raquo;</a></li>
    </ul>
	</div>
</div>
</div>