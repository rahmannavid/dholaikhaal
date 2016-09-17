<div class="col-md-4">

    <div class="row">
        
        <form id="myform" class="form-signin"  >
            <h2 class="form-signin-heading">Registration</h2>
            
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" class="form-control" placeholder="Name" required="" autofocus="">
            <label for="inputMobNo" class="sr-only">Mobile No</label>
            <input type="text" id="inputMobNo" class="form-control" placeholder="Mobile No" required="" autofocus="">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required>
            <label for="inputAddress" class="sr-only">Confirm Password</label>
            <textarea id="inputAddress" class="form-control" placeholder="Address"></textarea>       
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </form>
        
    </div>

</div>

<script>
    var password1 = document.getElementById('inputPassword');
    var password2 = document.getElementById('inputConfPassword');

    var checkPasswordValidity = function() {
        if (password1.value != password2.value) {
            password1.setCustomValidity('Passwords did not match!');
        } else {
            password1.setCustomValidity('');
        }        
    };
    password1.addEventListener('change', checkPasswordValidity, false);
    password2.addEventListener('change', checkPasswordValidity, false);
</script>
     