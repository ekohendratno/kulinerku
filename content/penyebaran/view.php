<!--
http://localhost/cgi-bin/mapserv.exe?map=/ms4w/apps/kuliner/kabupatenlampung.map&layer=laut&layer=lampung&layer=lambar&layer=tanggamus&layer=waykanan&layer=lamut&layer=tulangbawangbarat&layer=mesuji&layer=tulangbawang&layer=lamteng&layer=lamtim&layer=pringsewu&layer=metro&layer=pesawaran&layer=lamsel&layer=bandarlampung&mode=map
-->
<div id="box">
	<div class="box-title">Penyebaran Kuliner</div>
    <div class="box-content">
    
<div id="maps">
<div class="maps-nav">
<label><input type="radio" name="cmd" value="zoom-all" checked><span class="zoom">Zoom all</span></label>
<label><input type="radio" name="cmd" value="zoom-in"><span class="zoom">Zoom in</span></label>
<label><input type="radio" name="cmd" value="zoom-out"><span class="zoom">Zoom out</span></label>
<label><input type="radio" name="cmd" value="recenter"><span class="recenter">Recenter</span></label>
<label><input type="radio" name="cmd" value="query"><span class="query">Query</span></label>
<div style="clear:both;"></div>
</div>
<div class="maps-content">


</div>
</div>
    
    </div>
</div>
<div id="box">
	<div class="box-title">Data Kuliner</div>
    <div class="box-content">

<div class="frame-width">
<table width="100%" border="0" cellspacing="0" cellpadding="2" id="table-ui">
  <tr class="head">
    <td class="depan"  style="width: 1%; text-align:center">No</td>
    <td align="center" style="width: 25%; text-align:left">Perusahaan</td>
    <td align="center" style="width: 45%;">Alamat</td>
    <td align="center" style="width: 15%;">Bidang Usaha</td>
  </tr>
<?php
$i = 1;
$warna = $total_qty = '';
for( $a=0; $a<=20; $a++ ){

$warna  = empty ($warna) ? ' bgcolor="#f9fbff"' : '';
?>
  <tr class="isi"<?php echo $warna?>>
    <td class="depan" align="center"><?php echo $i?></td>
    <td align="left"></td>
    <td align="center"></td>
    <td align="center"></td>
  </tr>
<?php
$i++; 
}
?>
  <tr style="background:none">
    <td align="center" style="border-left:1px solid #ddd;border-right:1px solid #ddd;border-bottom:1px solid #ddd; padding:3px"><?php echo ($i-1)?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>

    </div>
</div>