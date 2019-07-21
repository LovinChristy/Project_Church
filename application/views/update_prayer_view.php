

 <?php 
          $attributes = array("class" => "form-horizontal", "id" => "updatePrayer", "name" => "updatePrayer");
          echo form_open("ChurchController/verifyUpdatePrayer", $attributes);
    ?>
    
<center><table class="table table-striped table-bordered" style="width:60%;height:50%;">
<?php
if($prayer){
    foreach($prayer as $row){?>
  <tr><td>
          <input hidden="" type="text" name="id" readonly="" value="<?php  echo $row->chprayer_id ?>">
        <?php echo "Prayer name:" ?><td><input type="text" name="txt_prayer" readonly="" value="<?php  echo $row->prayername ?>"></td>
 
 <tr><td>
        <?php echo "Date and time:"?><td><input type="text" name="txt_day" value="<?php echo $row->day?>"><td><input type="text" name="txt_time" value="<?php echo $row->time?>"></td>
<tr><td>
        <?php echo "Venue:"?><td><input type="text" name="txt_venue" value="<?php echo $row->venue?>"></td>
<tr><td>
        <?php echo "Description:"?><td><input type="textarea" name="txt_description" value="<?php echo $row->description?>"></td>

    <tr><td colspan="2">
        <center><input type="submit" class="btn btn-warning" name="btnUpdate" id="btnUpdate" value="Update">
    </tr>
 <?php }
}
        else
        {
            echo "<tr><td>No result found!!";
        } ?>
    
</table>

    <?php echo form_close(); ?>
 <?php
                include('footer.php');
              