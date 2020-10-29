<?php

$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}

if ( null==$id ) {
	header("Location: index.php");
}



$pass = $_POST['pass'];

if($pass == "letmein")
{
        include("update.php");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="secure.php?id=<?echo $id; ?>">
            Password <input type="text" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
            <a class="btn" href="index.php">Back</a>
    <?}
}
?>