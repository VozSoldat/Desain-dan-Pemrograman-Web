<!DOCTYPE html>
<html>

<body>
    
<?php 
// $pattern = '/[a-z]/';
// $pattern = '/[0-9]+/';
$pattern ='/apple/';
$replacement = 'banana';
$text = 'I like coklat apple.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
?>
</body>
</html>