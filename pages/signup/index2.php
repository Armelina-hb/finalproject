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

<form action="./pages/signup/action.php" method="post">
    <h1>Sign Up</h1>    
    <p>Please fill this to create an account.</p>

    <label>
        <span>Username </span><br/>
        <input id="username" name="username" type="text" required/>
    </label>

    <br/>

    <label>
        <span>Password</span><br/>
        <input id="password" name="password" type="password" required/>
    </label>

    <br/>

    <label>
        <span>Confirm Password</span><br/>
        <input id="confpassword" name="confpassword" type="password" required/>
    </label>

    <br/>
    <br/>

    <input id="submit" type='submit' value="Submit" onclick="validate()"/>
    <input id="reset" type='submit' value="Reset"/>

    <br/>
    
    <p>Already have an account? 
    <a href="http://localhost/myapp/final_project/index.php?page=login"> Login here</a></p>
    
</form>
