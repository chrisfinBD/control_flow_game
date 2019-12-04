<?php 
$mystring = 'Hello';
$findme = 'a';
$pos = strpos($mystring, $findme);

// === is required instead of == since the position of a is the 0th first character
//

if ($pos === false) {
				echo "The string '$findme' was not foun in the strong '$mystring'";
} else {
				echo "The string '$findme' was found in the string '$mystring'";
				echo " and exists at position $pos";
}
?>

<?php
	echo strpos("Hello World", "test"); // outputs false
?>
<?php 
	echo str_word_count("Hello World"); // outputs 2
?>
<?php
echo strlen("Hello World"); // returns 11
?>
