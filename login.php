<html>
    <body>
        <h2 align="center">login page</h2>
        <form action="" method="post">
            <table align="center" border="1">
                <tr><td>name</td><td><input type="text" name="user"></td></tr>
                <tr><td>password</td><td><input type="password" name="pass"></td></tr>

                <tr><td ><input type="submit" name="sub" value="submit"></td></tr>
            </table>
        </form>
    </body>
</html>

<?php

$server=mysqli_connect("localhost","root","","login-page");

if (isset($_POST["sub"])) {
    $name = $_POST["user"];
    $pass = $_POST["pass"];

    $query = mysqli_query($server, "(select * from register where name='$name' and password='$pass')");

    if (mysqli_num_rows($query) != 0) {
        echo "<script>alert('login sucessful')</script>";
    } else {
        echo "<script>alert('login failed')</script>";
    }
}