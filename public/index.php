<!DOCTYPE HTML>
<html lang = "en">
<head>
<meta charset="UTF-8">
<title>ISAD25 Referral</title>
</head>
<body>

<h1>ISAD251 Summer Referral</h1>

</body>
</html>


<?php
#Write the traditional greeting
echo '<h1>Hello World!</h1>';

?>

<p>Ignored by PHP and displayed by the browser</p>

<?php echo 'Script code that will be parsed';?>

<p>Also ignored by PHP and displayed by the browser</p>

<?= 'Hello!';?> is equivalent to <?php echo 'Hello!'; ?>

<?php echo 'First statement '; // A single line comment

/* This is a multi line comment
containing two lines of comments. */

echo ' Second statement';?>

<?php echo 'First statement '; 

echo 'Second statement ' #Another single line comment.
?> 