<div id="box">
	<div class="box-title">Account <a href="#" class="right">Edit &raquo;</a></div>
    <div class="box-content">
        <div class="account-item">
        <img class="account-item-thumb" src="thumb.php?src=./images/account.jpg&size=40x40" alt="" style="width:40px; height:40px;"/>
        <div class="account-item-content">
        	<div class="account-item-content-title">Eko Azza</div>
        	<div class="account-item-content-date">
            	<span class="home">Bandar Lampung</span>
            	<span class="time">12 Agustus 2013</span>
            </div>
        </div>      
        <div style="clear:both"></div> 
        </div>   
        <div style="clear:both"></div>
        <ul class="menu">
        	<li><a href="#">Administrator</a></li>
           	<li><a href="#">Ubah katasandi</a></li>
        </ul> 
    </div>
</div>
<?php if( isset($_GET[page]) && $_GET[page] != 'daftarkan-kuliner' ){?>
<div id="box">
	<div class="box-title">Berita Terbaru <a href="#" class="right">Semua &raquo;</a></div>
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
        <a href="#"><img class="kuliner-item-thumb" src="thumb.php?src=<?php echo $thumb;?>&size=80x80" alt="" style="width:80px; height:80px;"/></a>
        <div class="kuliner-item-content">
        	<a href="#"><div class="kuliner-item-content-title">RM Lamo</div></a>
        	<div class="kuliner-item-content-desc">keterangan dari RM Lamo</div>
        	<div class="kuliner-item-content-date">
                <span class="author">oleh: eko</span>
                <div style="clear:both"></div>
            	<span class="time">12 Agustus 2013</span>
            </div>
        </div>
        <div style="clear:both"></div>
        </div>        
        <div style="clear:both"></div>
        <?php }?>
    </div>
</div>
<?php }else{ if( $_GET[page] != 'daftarkan-kuliner' ){?>
<div id="box">
	<div class="box-title">Direkomendasikan <a href="#" class="right">Semua &raquo;</a></div>
    <div class="box-content">    
    	<?php 
		$style_box = '';
		for( $i=0; $i<=2; $i++){?>
    	<!--kuliner item start-->
    	<?php
		$thumb = './images/rumah-makan.jpg'; 
		$style_box  = empty ($style_box) ? ' active' : '';
		?>
        <div class="kuliner-item<?php echo $style_box;?>">
        <a href="#"><img class="kuliner-item-thumb" src="thumb.php?src=<?php echo $thumb;?>&size=80x80" alt="" style="width:80px; height:80px;"/></a>
        <div class="kuliner-item-content">
        	<a href="#"><div class="kuliner-item-content-title">RM Lamo</div></a>
        	<div class="kuliner-item-content-desc">keterangan dari RM Lamo</div>
        	<div class="kuliner-item-content-date">
                <span class="author">oleh: eko</span>
                <div style="clear:both"></div>
            	<span class="time">12 Agustus 2013</span>
            </div>
        </div>
        <div style="clear:both"></div>
        </div>        
        <div style="clear:both"></div>
        <?php }?>
    </div>
</div>
<?php }?>
<div id="box">
	<div class="box-title">Baru ditambahkan <a href="#" class="right">Semua &raquo;</a></div>
    <div class="box-content">    
    	<?php 
		$style_box = '';
		for( $i=0; $i<=2; $i++){?>
    	<!--kuliner item start-->
    	<?php
		$thumb = './images/rumah-makan.jpg'; 
		$style_box  = empty ($style_box) ? ' active' : '';
		?>
        <div class="kuliner-item<?php echo $style_box;?>">
        <a href="#"><img class="kuliner-item-thumb" src="thumb.php?src=<?php echo $thumb;?>&size=80x80" alt="" style="width:80px; height:80px;"/></a>
        <div class="kuliner-item-content">
        	<a href="#"><div class="kuliner-item-content-title">RM Lamo</div></a>
        	<div class="kuliner-item-content-desc">keterangan dari RM Lamo</div>
        	<div class="kuliner-item-content-date">
                <span class="author">oleh: eko</span>
                <div style="clear:both"></div>
            	<span class="time">12 Agustus 2013</span>
            </div>
        </div>
        <div style="clear:both"></div>
        </div>        
        <div style="clear:both"></div>
        <?php }?>
    </div>
</div>
<?php }?>