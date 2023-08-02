<style>
    form{
        text-align: center;
        margin: auto;
        width: 500px;
        box-shadow: 0px 10px 15px 0px grey;
        border-radius: 10px;
    }
    h1{
        margin-left: 0;
        margin-bottom: 2px;
        padding-top: 5px;
    }
    p{
        font-size: smaller;
        margin-bottom: 15px;
    }
    #username, #password{
        width: 400px;
        text-align: center;
        display: block;
        margin-right: auto;
        margin-left: auto;
    }
    .form-check-label{
        margin-left: 16px;
    }
</style>

<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<form action="./pages/login/action.php" method="post">
    <h1>Login</h1>
    <p>Please fill this to connect an account.</p>
    
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" required/>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required/>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
        </div>

        <!-- Simple link -->
        <!-- <div class="col">
        <a href="#!">Forgot password?</a>
        </div> -->
    </div>

    <!-- Submit button -->
    <input id="submit" type="submit" value="Submit" onclick="validate()"/>
    <input id="reset" type='reset' value="Reset"/>
    

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member ? <a href="http://localhost/myapp/final_project/index.php?page=signup">Register</a></p>
        <!-- <p>or sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fa fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fa fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fa fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fa fa-github"></i>
        </button> -->
    </div>
</form>