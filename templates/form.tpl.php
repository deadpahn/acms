<div class="container">
    <div class="row clearfix">
        <div class="span6">
            <form class="form-verticle" >
                <fieldset>
                <!-- Form Name -->
                <legend><h2><?php echo $this->finalForm['name'] ?></h2></legend>

                <?php
                foreach($this->finalForm['fields'] as $key => $value){
                ?>
                <!-- Text input-->
                <div class="control-group">
                  <label class="control-label" for="<?php echo $key?>"><?php echo $key?></label>
                  <div class="controls">
                    <input id="<?php echo $key?>" name="<?php echo $key?>" placeholder="<?php echo $key?>" class="input-xlarge" type="text">
                  </div>
                </div>    
                <?php 
                }
                ?>

                <!-- Button (Double) -->
                <div class="control-group">
                  <label class="control-label" for="submit"></label>
                  <div class="controls">
                    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button id="Cancel" name="Cancel" class="btn btn-danger">Cancel</button>
                  </div>
                </div>
                </fieldset>
            </form>
        </div>
     </div>
</div>