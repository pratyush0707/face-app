<html>
    <body>
        <a href="login.php">if already register click here</a>
        <h2 align="center">register page</h2>
        <form action="" method="post">
            <table align="center" border="1">
                <tr><td>name</td><td><input type="text" name="user"></td></tr>
                <tr><td>password</td><td><input type="password" name="pass"></td></tr>

                <tr><td ><input type="submit" name="sub" value="register"></td></tr>
            </table>
        </form>
    </body>
</html>

<?php

$server=mysqli_connect("localhost","root","","login-page");

if (isset($_POST["sub"])) {
    $name=$_POST["user"];
    $pass=$_POST["pass"];

    mysqli_query($server,"insert into register values('$name','$pass')");
    echo"<script>alert('succesfully done')</script>";
}