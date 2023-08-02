<style>
    #form2Example3cg{
        margin-left: -26%;
    }
    #submit{
        margin-left: 38%;
    }
</style>

<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<h2 class="text-uppercase text-center mb-5">Login</h2>
<p>Please fill this to connect an account.</p>


<form action="./pages/login/action.php" method="post">

    <div class="form-outline mb-4">
    <label class="form-label" for="form3Example1cg">Username</label>
    <input type="text" id="form3Example1cg" name="username"class="form-control form-control-lg" required/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cg">Password</label>
    <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" required/>
    </div>

    <div class="form-check d-flex justify-content-center mb-5">
    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
    <label class="form-check-label" for="form2Example3g"> Remember me </label>
    </div>

    <input id="submit" type="submit" value="Submit" onclick="validate()"/>
    <input id="reset" type='reset' value="Reset"/>

    <!-- <div class="d-flex justify-content-center">
    <button type="button"
        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
    </div> -->

    <p class="text-center text-muted mt-5 mb-0">Not a member ? <a href="http://localhost/myapp/final_project/index.php?page=signup"
        class="fw-bold text-body"><u> Register</u></a></p>

</form>