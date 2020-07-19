<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php
  $i=1;

  print_r($data);exit();

  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Category Name </td>
    <td width="329"><input type="text" name="category_name" value="<?php echo $row->category_name; ?>"/></td>
  </tr>
  
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update_Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>