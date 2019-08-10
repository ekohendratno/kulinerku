<div id="box">
	<div class="box-title">Daftarkan kuliner</div>
    <div class="box-content"> 
    
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
    <tr>
      <td width="20%" valign="top">Nama Perusahaan/Toko/ Tempat/Jasa</td>
      <td width="1%" valign="top"><strong>:</strong></td>
      <td width="79%" valign="top"><input type="text" name="textfield" id="textfield" style="width:70%;"></td>
    </tr>
    <tr>
      <td valign="top">Pemilik</td>
      <td valign="top"><strong>:</strong></td>
      <td valign="top"><input type="text" name="textfield2" id="textfield2" style="width:50%;"></td>
    </tr>
    <tr>
      <td valign="top">Alamat</td>
      <td valign="top"><strong>:</strong></td>
      <td valign="top"><textarea name="textarea" id="textarea" style="width:100%; height:50px;"></textarea></td>
    </tr>
    <tr>
      <td valign="top">Produk Usaha</td>
      <td valign="top"><strong>:</strong></td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_1">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
            Checkbox</label></td>
        </tr>
        <tr>
          <td><label for="textfield4">yg lain:</label>
            <input type="text" name="textfield4" id="textfield4" style="width:100%;">contoh: sop ayam, bubur, mie, dll</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">Kabupaten</td>
      <td valign="top"><strong>:</strong></td>
      <td valign="top">
    	<select>
        	<option value="#">Pilih Kabupaten</option>
        <?php 
		$query_prov = mysql_query("SELECT * FROM lokasi");
		while( $data_prov = mysql_fetch_object($query_prov) ){
			echo '<option value="'.$data_prov->lokasi_id.'">'.$data_prov->nama.'</option>';
		}
		?>
		</select></td>
    </tr>
    <tr>
      <td valign="top">Thumbnail</td>
      <td valign="top"><strong>:</strong></td>
      <td valign="top"><input type="file" name="fileField" id="fileField"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" class="button blue" name="daftarkan" id="daftarkan" value="Daftarkan"></td>
    </tr>
  </table>
</form>
    
    
  </div>
</div>