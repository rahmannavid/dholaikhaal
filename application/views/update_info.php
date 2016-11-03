<div class="col-md-4">

    <div class="row">
        
        <form id="myform"  method="post" class="form-signin" action="<?php echo base_url() ?>index.php/user_a/user_info_update_proc/">
            <h2 class="form-signin-heading">Update Your Informations.</h2>
            
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" value = "<?php echo $user->name ?>" id="inputName" name="inputName" class="form-control" placeholder="Name" required="" autofocus="">
            <label for="inputMobNo" class="sr-only">Mobile No</label>
            <input type="text" id="inputMobNo" value = "<?php echo $user->mobile ?>" name="inputMobNo" class="form-control" placeholder="Mobile No" required="" autofocus="">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" value = "<?php echo $user->email ?>" name="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            
            <label for="oldPassword" class="sr-only">Old Password</label>
            <input type="password" id="oldPassword" name="oldPassword" class="form-control" placeholder="Old Password" required="">
            
            <input type="hidden" id="mainPassword" name="mainPassword" value = "<?php echo $user->password ?>" >
            <input type="hidden" id="user_id" name="user_id" value = "<?php echo $user->id ?>" >

            <label for="newPassword" class="sr-only">New Password</label>
            <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="New Password" required="">
            
            <label for="inputConfPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfPassword" name="inputConfPassword" class="form-control" placeholder="Confirm Password" required="">
            
            <textarea id="inputAddress" name="inputAddress" value = "<?php echo $user->address?>" class="form-control" placeholder="Address"><?php echo $user->address?></textarea>       
            <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </form>
        
    </div>

</div>

<script>
    var password1 = document.getElementById('newPassword');
    var password2 = document.getElementById('inputConfPassword');

    var mainpass = document.getElementById('mainPassword');
    var oldpass = document.getElementById('oldPassword');

    var checkPasswordValidity = function() {

        if (mainpass.value == oldpass.value) {
            oldpass.setCustomValidity('');
               
                if (password1.value == password2.value) {
                    password1.setCustomValidity('');
                } else {
                    password1.setCustomValidity('New Passwords did not match!');
                }
        }
        else {
            oldpass.setCustomValidity('Old Passwords did not match!');
        }        
    };

    password1.addEventListener('change', checkPasswordValidity, false);
    password2.addEventListener('change', checkPasswordValidity, false);
    oldpass.addEventListener('change', checkPasswordValidity, false);


</script>