<html>
<body>
<?php

$input = "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $input= $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    
    echo "$input <br><br>";

    $email= "";
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is valid: $email";
    }else {
        echo "Email is not valid";
    }
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input">
<br>
<br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
<br>

        <input type="submit">
    </form>

    <br><br>

    <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <input type="submit">
    </form> -->

</body>
</html>