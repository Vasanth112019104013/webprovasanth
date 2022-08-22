<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <title>
            User--login page
        </title>
    </head>
    <body>
        <div >
        <div >
            <nav class="nav">
                <ul class="bar">
                    <li ><a href="index.php" >HOME</a></li>
                    <li ><a href="regis.php" >REGISTER</a></li>
                    <li ><a href="#">CONTACT</a></li>
                    <li ><a href="#">ABOUT US</a></li>
            </nav>
        </div>
        <div class="display" id="reg">
            <?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p><?php } ?>
        <form action="validation.php" method="post">
            <div class="login">
            <div class="uname">
                <input type ="text" class="textbox" name="uname" placeholder="Username" >
                <span></span>
            </div>
            <br>
            <div class="pass">
                <input type="password" class="textbox"  name="password" placeholder="password">
                <span></span>
            </div>
            </div>
            <div>
                <input class="submit" type="submit" value="LOGIN"" >
        </form>
        <div class="eu">
                  <h2> Don't Have Account!<a class="a1"  href="regis.php"> Register </a></h2>
        </div>
        </div>
</div>
    </body>
    <script>
    function loaddata()
    {
        var a=new XMLHttpRequest();
        a.onreadystatechange= function(){
            if(this.readyState==4 && this.status==200)
            {
                document.getElementById("reg").innerHTML=this.responseText;
            }
        };
    a.open("GET","regis.php",true);
    a.send();
    }    
    </script>
</html>