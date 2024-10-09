<html>
<body>
<?php

$input = "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $input= $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    
    echo $input;
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input">
        <input type="submit">
    </form>


</body>
</html>