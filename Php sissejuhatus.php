<?php 
/* 
Returns the length of the given string.
List() can be used to assign a list of variables in one operation.Assign variables as if they were an array
nl2br — Inserts HTML line breaks before all newlines in a string
mb_strlen — Get string length

The difference of strlen() to mb_strlen() is, that the second respects multibyte characters.
This means, that this is the real character count. 
The first one assumes, that the string is always in ascii, what also means, that it always returns the size in bytes (very useful when handling binary "strings").

substr Returns the portion of string specified by the start and length parameters.
The input string. Must be one character or longer.

If length is given and is positive, the string returned will contain at most length characters beginning from start (depending on the length of string).
If length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, FALSE will be returned.
If length is given and is 0, FALSE or NULL, an empty string will be returned.
If length is omitted, the substring starting from start until the end of the string will be returned.
*/
$tekst =  "Some random tekst";
for($i = strlen($tekst)-1, $j=0; $j<$i; $i--, $j++){
	list($tekst[$j], $tekst[$i]) = array($tekst[$i], $tekst[$j]);
	}
echo $tekst;

$tekst2 = "Some random tekst also";
echo nl2br("\n");
echo strrev($tekst2);

$tekst3 = "And another random tekst";
for($i = 0, $length = mb_strlen($tekst3); $i < $length; $i++){
	$tekst3 = $tekst3{$i}.mb_substr($tekst3,0,$i).mb_substr($tekst3,$i+1);
	}
echo nl2br("\n".$tekst3);


$tekst4 = "Last random tekst";
$length = strlen($tekst4);
for($i=$length-1;$i>=0;$i--){
	echo $tekst4[$i];
	}
?>

