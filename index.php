<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SIG Kuliner Lampung</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/forms.css" rel="stylesheet" type="text/css">
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/colors.css" rel="stylesheet" type="text/css">
<link href="css/jquery.fs.selecter.css" rel="stylesheet" type="text/css">
<script src='js/jquery.min.js' type='text/javascript'></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.fs.selecter.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 7000, true);
	$('select#select-prov').selecter({ callback: selectCallback });
	function selectCallback(value, index) {
    	alert(index);
	}
});
</script>
</head>
<body>
<?php
error_reporting(0);

$connect = mysql_connect("localhost","root","");

if (!$connect){ 
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("kuliner_lampung", $connect) or die("DATABASE Gagal ditemukan");

$page = mysql_real_escape_string( $_GET[page] );
?>
<div id="top" class="effect6">
<div class="wrap">
<a href="./"><img src="images/logo.png" class="logo left" style="height:45px; margin-top:3px;"/></a>
<div class="menu right">
<ul class="menu-ul">
    <li><a href="./">Home</a></li>
    <li><a href="?page=kuliner">Kuliner</a></li>
    <li><a href="?page=penyebaran">Penyebaran Kuliner</a></li>
    <li><a href="?page=statistik">Statistik Kuliner</a></li>
    <li><a href="?page=bukutamu">Bukutamu</a></li>
    <li><a href="?page=kontak">Kontak</a></li>
    <li><a href="?page=tentang">Tentang</a></li>
</ul>
</div>
</div>
</div>
<div id="content-title">
<div class="wrap content-title"><span style="color:#fff;">sig kuliner</span> lampung</div>
</div>
<div id="content-top">
<div class="wrap content-top radius radiustop">
	<?php if( $page == 'kuliner' || $page == 'penyebaran' ){?>
    <div class="left">
    	<select id="select-prov">
        	<option value="#">Kuliner Semua Kabupaten</option>
        <?php 
		$query_prov = mysql_query("SELECT * FROM lokasi");
		while( $data_prov = mysql_fetch_object($query_prov) ){
			echo '<option value="'.$data_prov->lokasi_id.'">'.$data_prov->nama.'</option>';
		}
		?>
		</select>
    </div>
    <?php }?>
    <div class="right">
    	<a href="?page=daftarkan-kuliner" class="button button1 radius">Daftarkan kuliner disini</a>
    	<a href="?page=daftar" class="button button2 radius">Daftar</a>
    	<a href="?page=keluar" class="button button3 radius">Keluar</a>
    	<a href="?page=masuk" class="button button4 radius">Login</a>
    </div>
</div>
</div>
<div id="content">
<div class="wrap content">
	<div id="main">
	<?php 
		
	if( $page ){
		if( file_exists("content/$page/view.php") ){
			
			if( file_exists("content/$page/function.php") )
				include "content/$page/function.php";
			
			include "content/$page/view.php";
		}elseif( file_exists("content/$page.php") ){		
			include "content/$page.php";
		}else{
			include 'content/404.php';
		}
	}else{
		include 'hightligth-slide.php';	
		include 'front.php';
	}
	?>
    </div>
    <div id="sidebar">
    <?php 
	if( file_exists("content/$page/sidebar.php") )
		include "content/$page/sidebar.php";
	else
		include 'sidebar.php';
	?>
    </div>
    <div style="clear:both"></div>
</div>
</div>
<div id="footer">
<div class="wrap footer radius radiusbottom">
<div class="left">&copy; <?php echo date(Y);?> cmsid.org | All Right Reserved</div>
<div class="right">lkv1 | Desain by Eko</div>
</div>
</div>
</body>
</html>