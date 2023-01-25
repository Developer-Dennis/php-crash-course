<?php

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST ['name']);
    $age = htmlspecialchars( $_POST['age']);
    echo $name;
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
 name=Dennis&age=30">Click Me</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="" id="">
    </div>

    <div>
        <label for="name">Age:</label>
        <input type="text" name="" id="">
    </div>
    <input type="submit" value="submit" name="submit">
</form>