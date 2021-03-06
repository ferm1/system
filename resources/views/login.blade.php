<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <style>
    body
{
    margin: 0;
    padding: 0;
}
.form-box-login{
    width: 380px;
    height: 450px;
    position: relative;
    margin: 2% auto;
    background: rgba(0, 0, 0, 0.3);
    padding: 10px;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.form-box-register{
    width: 380px;
    height: 680px;
    position: relative;
    margin: 2% auto;
    background: rgba(0, 0, 0, 0.3);
    padding: 10px;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.input-group-login{
    top: 150px;
    position: absolute;
    width: 280px;
}
.input-group-register{
    top: 120px;
    position: absolute;
    width: 280px;
    text-align: center;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    margin-left: 50px;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    color: rgb(211, 211, 211);
    border-bottom: 1px solid rgba(216, 216, 216, 0.815);
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor:pointer;
    display: block;
    margin: auto;
    background: #f3c693;
    border: 0;
    border-radius: 30px;
    margin-left: 70px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 15px;
}
.check-box{
    margin: 30px 10px 34px 0;
    margin-left: 40px;
}
.check-box-register{
    margin-top: 10px;
    display: inline-block;
    margin-bottom: 10px;
    font-size: large;
}
span{
    color: rgb(153, 153, 153);
    font-size: 12px;
}
.register-btn{
    padding: 8px 30px;
    cursor:pointer;
    display: block;
    margin: auto;
    border-radius: 30px;
    margin-left: 70px;
    color:rgb(255, 255, 255);
    text-decoration: none;
    text-align: center;
    margin-top: 20px;
    width: 65%;
    background: rgba(71, 71, 71, 0.842);
    box-shadow: 0 0 20px 9px #05050581;
    
}
.login-btn{
    padding: 8px 30px;
    cursor:pointer;
    display: block;
    margin: auto;
    border-radius: 30px;
    margin-left: 70px;
    color:rgb(255, 255, 255);
    text-decoration: none;
    text-align: center;
    margin-top: 20px;
    width: 65%;
    background: rgba(71, 71, 71, 0.842);
    box-shadow: 0 0 20px 9px #05050581;

}
.top-text{
    display: block;
    margin: auto;
    color:ghostwhite;
    text-align: center;
    font-size: 50px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

</style>
        <title>Capstone</title>
    </head>
    <body>
        <div class="full-page">
            <div class="form-box-login">
                <div class="top-text">
                    <p>Login</p>
                </div>
                <form class="input-group-login">
                    <input type="text" class="input-field" placeholder="Email" required>
                    <input type="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember</span>
                    <div>
                        <button type="submit" class="submit-btn">Log in</button>
                        <a class="register-btn" href="/">Register</a>
                    </div>
                        
                </form>

                    
            </div>
        </div>
        
        
    </body>
</html>