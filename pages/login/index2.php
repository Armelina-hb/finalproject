<style>
    form{
        text-align: center;
        margin: auto;
        width: 400px;
        box-shadow: 0px 10px 15px 0px grey;
    }

    h1{
        margin-left: 0;
    }

    p{
        font-size: smaller;
        margin-bottom: 5px;
    }

    span{
        display: flex;
        justify-content: flex-start ;
        margin-bottom: -20px;
    }

    #submit{
        background-color: cornflowerblue;
        border: 0;
        border-radius: 5%;
        margin-bottom: 10px;
    }

    #reset{
        background-color: gray;
        border: 0;
        border-radius: 5%;
        margin-bottom: 10px;
    }    
</style>

<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<form action="./pages/login/action.php" method="post">
    <h1>Login</h1>
    <p>Please fill this to connect an account.</p>

    <label for="username">
        <span>Username </span><br/>
        <input id="username" name="username" type="text" required/>
    </label>

    <br/>

    <label for="password">
        <span>Password</span><br/>
        <input id="password" name="password" type="password" required/>
    </label>

    <br/>

    <input id="submit" type="submit" value="Submit" onclick="validate()"/>
    <input id ="reset" type='reset' value="Reset"/>
</form>