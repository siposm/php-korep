<?php
    // var_dump($_POST);

    if(isset($_POST["user_name"]) && $_POST["user_name"] == "cirmi") {
        if(isset($_POST["user_pwd"]) && $_POST["user_pwd"] == "cicapanzio") {
            // ACCESS GRANTED
            header('Location: admin.php');
            // include('admin.php');
        }
    }

?>
    <!-- a php kikapcsolható és akkor a html intellisense-vel írható -->

    <h1>LOGIN</h1>

    <form method="post" action="login.php">
        <input type="text" name="user_name" placeholder="user name">
        <br>
        <input type="password" name="user_pwd" placeholder="user password">
        <br>
        <input type="submit" value="Log in">
    </form>

<?php
    echo "<hr>";
?>