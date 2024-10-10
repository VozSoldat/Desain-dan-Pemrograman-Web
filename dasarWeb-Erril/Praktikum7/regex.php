<!DOCTYPE html>
<html>

<body>
    
<?php 
// $pattern = '/[a-z]/';
// $pattern = '/[0-9]+/';
// $pattern ='/apple/';
$pattern = '/go{1,2}d/';
// $replacement = 'banana';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: $matches[0]";
}else{
    echo "Tidak ada yang cocok";
}

?>
</body>
</html>