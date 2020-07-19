<!DOCTYPE html>  
<html>
<head>
<title>Category form</title>
</head>
 
<body>


 <?php echo validation_errors(); ?>
                    <?php 
                        if(!empty($sess=$this->session->flashdata('item')))
                        {
                            ?>
                                <div class="alert alert-dismissible alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <?php echo $sess;?>
                                          </div>
                            <?php  
                        }
                    ?>                    
                    <?php 
                    if(!empty($sess=$this->session->flashdata('item2')))
                    {
                    ?>
                    <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo $sess;?>
                              </div>
                    <?php  
                    }
                    ?>



  
	<form method="post" action="<?php echo base_url('ADDCATEGORY');?>" role="form">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Category Name </td>
    <td width="329"><input type="text" name="category_name"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>
 
	</form>
</body>
</html>