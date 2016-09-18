<div class="col-md-4">

    <div class="row">
        <div class="col-md-offset-3">
        <div class="form-login">
            <h3>Welcome back!</h3>
             <h4 style="color:red">
                <?php echo validation_errors(); ?>
                <?php echo form_open('verifylogin'); ?>
            </h4>
            <h4 style="color:green">
                <?php if(isset($message_display)) echo $message_display ?> 
            </h4>
           <br/>
             <input type="text" size="100" id="username" name="username" class="form-control chat-input" placeholder="email"/>
             <br/>
             <input type="password" size="100" id="passowrd" name="password" class="form-control chat-input" placeholder="password"/>
             <br/>
             <input type="submit" value="Login" class="form-control btn btn-primary"/>
           </form>
           Not registered? <a href="<?php echo base_url() ?>index.php/account/registration">Registr Now</a>
           </div>
        </div>
    </div>
</div>