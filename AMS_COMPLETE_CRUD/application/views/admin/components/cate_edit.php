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


      

      <!-- This Form Code Dynamically -->

          <?php echo form_open("Category/UpdateCategory/{$catmod->id}");
          //  echo form_hidden('id',$catmod->id);
          ?>

  <!-- Above The Form Code Dynamically -->
  
  
  <tr>
    <td width="230">Category Name </td>
    <td width="329">

      <?php echo form_input(['name'=>'category_name','class'=>'form-control','placeholder'=>'Input Category Name','value'=>set_value('category_name', $catmod->category_name)]);?>

    </td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Update"/></td>
  </tr>
</table>
 
  </form>
</body>
</html>