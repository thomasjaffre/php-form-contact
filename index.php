<html>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname"><br/>
    E-mail: <input type="text" name="email"><br/>
    Website: <input type="text" name="website"><br/>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br/>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other<br/>
    <input type="submit">
    
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // COLLECT VALUE OF INPUT FIELD
        echo 'fname = '.$_POST['fname'] . '<br/>';
        echo 'email = '.$_POST['email'] . '<br/>';
        echo 'website = '.$_POST['website'] . '<br/>';
        echo 'comment = '.$_POST['comment'] . '<br/>';
        echo 'gender = '.$_POST['gender'] . '<br/>';
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    $name = test_input($_POST["name"]);

  if (!preg_match('/^[a-zA-Z \p{L}]+$/ui', $name)) {

    $nameErr = "Only letters and white space allowed";

  }


$email = test_input($_POST["email"]);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

  $emailErr = "Invalid email format";

}


$website = test_input($_POST["website"]);

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {

  $websiteErr = "Invalid URL";

}
    
    ?>
</body>
</html>




