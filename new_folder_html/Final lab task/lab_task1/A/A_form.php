

<?php
    if(isset($_POST['submit'])){

        $name = $_POST['username'];
        echo " your name is: $name";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body> 
        <form method="post" action="" enctype="multipart/form-data">
            Name:   <input type="text" name="username" value="<?php if(isset($_POST['name'])){echo $name;} ?>"/> <br>
                        <input type="submit" name="submit" value="Submit"/>
        </form>
</body>
</html>