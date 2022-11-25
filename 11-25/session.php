<?php
    session_start();
    // $_SESSION = [];

    // $_SESSION['username'] = "lajoska123";
    // $_SESSION['settings'] = [
    //     "background" => "green",
    //     "font-size" => "34px"
    // ];

    function valtki($v)
    {
        echo "<pre>";
        print_r($v);
        echo "</pre>";
    }

    if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id'] = session_id(); // nem sok értelme van!
    }


    valtki($_SESSION);
    // valtki(session_id());
?>


<form action="session.php" method="post">
    <input type="text" name="username">
    <input type="submit" value="Start session for this user">
</form>