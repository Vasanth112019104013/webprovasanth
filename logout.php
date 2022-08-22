<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['uname'])){
    ?>
<html>
    <head>
        <link rel="stylesheet" href="css/logout.css">
        <title>
            User--page
        </title>
    </head>
    <body>
    <div >
        <div >
            <nav class="nav">
                <ul class="bar">
                    <li ><a href="index.php" >HOME</a></li>
                    <li ><a href="login.php" >LOGOUT</a></li>
                    <li ><a href="#">CONTACT</a></li>
                    <li ><a href="#">ABOUT US</a></li>
            </nav>
        </div>
       <div class=profile >
        
        <h2 style="margin-top:80px;margin-left:100px;font-family:monospace ;">NAME:</h2 ><h2 style="color:blue; font-family:monospace ;padding:20px;margin-left:280px; margin-top:-45px;text-transform:uppercase;" ><?php echo $_SESSION['name'];?></h2><br>
        <h2 style="margin-top:0px;margin-left:100px;font-family:monospace ;">AGE:</h2><h2 style="color:blue;padding:20px;font-family:monospace ;margin-left:280px; margin-top:-50px;"><?php echo $_SESSION['age'];?></h2><br>
        <h2 style="margin-top:0px;margin-left:100px;font-family:monospace ;"  >DATE OF BIRTH:</h2 > <h2 style="color:blue; font-family:monospace ;padding:20px;margin-left:280px; margin-top:-50px;" id="t"><?php echo $_SESSION['dob'];?></h2><br>
        <h2 style="margin-top:0px;margin-left:100px;font-family:monospace ;">PHONE NUMBER:</h2> <h2 style="color:blue; text-decoration:none;font-family:monospace ;padding:20px;margin-left:280px; margin-top:-50px; " id="t"><?php echo $_SESSION['num'];?></h2><br>
        
       </div>
    </body>
    </html>
    <?php
}
else{
    header("Location: login.php");
                    exit();
}
?>