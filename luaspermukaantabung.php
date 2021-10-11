<!DOCTYPE html>
<html lang="en">
    <head>
 <meta charset="utf-8">
        <title>Tabung</title>
          
<style type="text/css">
body {
 background-color:#fff;
 font-family: Lucida Grande, Verdana, Sans-serif;
 margin:40px;
 font-size:14px;
  color: #4f55155;
}
  
a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}
  
h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #d0d0d0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px;
 padding: 5px 0 6px 0;
}
</style>
    </head>
  
<body>
<h1>Volume & Luas Permukaan Tabung </h1>
<p>Volume Tabung : 3.14 * r * r * t <br>
Luas Permukaan Tabung : 2 * 3.14 * r * t</p>
<p>Silahkan masukan data berikut :</p>
<ul>
    <?php echo form_open('volume/tabung'); ?>
Jari - jari : <br> <?php echo form_input('r',$r); ?> <br>
Tinggi : <br> <?php echo form_input('t',$t); ?> <br>
    <p><?php echo validation_errors();?></p>
      
    <?php echo form_submit('submit','Hitung'); ?>
    <?php echo form_close(); ?> <br>
<strong>Volume Tabung = </strong><?php echo $vol; ?> <br>
<strong>Luas Permukaan Tabung = </strong><?php echo $luas; ?>
</ul>
  
<p><?php echo anchor('volume','Home'); ?></p>
</body>
</html>