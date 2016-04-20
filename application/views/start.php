
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Install</title>

<link href="<?php echo base_url('assets/themes/default/css/form_style.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
<h3></h3>
<form action="" method="post" class="smart-green">
    <h1>Instalasi Berhasil
        <span>Beberapa informasi setting yang bisa di customize sendiri</span>
    </h1>
    <label>
        <span>Setting AGC ( offer,sub_id,aff_id )</span>
        <input readonly type="text" value="File configurasi ada di /application/config/agc.php" />
    </label>
    <label>
        <span>Sitemap</span>
        <input readonly type="text" value="www.namadomain.com/sitemap.xml" />
    </label>
    <label>
        <span style="color:red;">WARNING: Segera Hapus folder install setelah proses instalasi berhasil</span>
        <br />
        <br />
        <br />
    </label>
	 <label>
        <span>&nbsp;</span> 
		<input type="button" onclick="window.location='<?php echo base_url();?>'" class="button" value="Finish" style="cursor:pointer;" />
    </label>   
</form>

</body>
</html>