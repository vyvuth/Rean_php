<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // PHP Operators

        // PHP Arithmetic Operators

        // Addiction operator 
        $a = 2;
        $b = 3;
        echo "Addiction of $a + $b = " . ( $a + $b ) ;
        print"<br>";
        
        // Substraction operator
        $c = 20;
        $d = 23;
        print "Substraction of $c - $d = " . ( $c - $d ) ;
        print "<br>";

        // Multification operator
        $f = 2025;
        $e = 2003;
        echo "Multification of $f * $e = " . ($f *$e);
        print "<br>";

        // Divide operator
        $x = 144;
        $y = 23;
        echo "Divide of $x / $y = " . ($x / $y);
        print "<br>";

        // Modulus operator 
        $x_1 = 25;
        $y_1 = 12;
        print "Modulus of $x_1 % $y_1 = " . ($x_1 % $y_1);
        print "<br>";

        // Exponentiation operator 
        $x_2 = 23;
        $y_2 = 21;
        print "Exponentiation of $x_2 ** $y_2 = " . ($x_2 ** $y_2);
        print "<br><br>";

        // PHP Comparison Operators
        // The PHP comparison operators are used to compare two values (number or string):
//         Operator	Name	Example	Result	Try it
// ==	Equal	$x == $y	Returns true if $x is equal to $y	
// ===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
// !=	Not equal	$x != $y	Returns true if $x is not equal to $y	
// <>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
// !==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
// >	Greater than	$x > $y	Returns true if $x is greater than $y	
// <	Less than	$x < $y	Returns true if $x is less than $y	
// >=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
// <=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
// <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.	


// PHP Increment / Decrement Operators
// The PHP increment operators are used to increment a variable's value.
// The PHP decrement operators are used to decrement a variable's value.

// Operator	Same as...	Description	
// ++$x	Pre-increment	Increments $x by one, then returns $x	
// $x++	Post-increment	Returns $x, then increments $x by one	
// --$x	Pre-decrement	Decrements $x by one, then returns $x	
// $x--	Post-decrement	Returns $x, then decrements $x by one


// PHP Logical Operators
// The PHP logical operators are used to combine conditional statements.

// Operator	Name	Example	Result
// and	And	$x and $y	True if both $x and $y are true	
// or	Or	$x or $y	True if either $x or $y is true	
// xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
// &&	And	$x && $y	True if both $x and $y are true	
// ||	Or	$x || $y	True if either $x or $y is true	
// !	Not	!$x	True if $x is not true	


// PHP String Operators
// PHP has two operators that are specially designed for strings.

// Operator	Name	Example	Result	
// .	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
// .=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1	


// PHP Array Operators
// The PHP array operators are used to compare arrays.
// Operator	Name	Example	Result
// +	Union	$x + $y	Union of $x and $y	
// ==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
// ===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
// !=	Inequality	$x != $y	Returns true if $x is not equal to $y	
// <>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
// !==	Non-identity	$x !== $y	Returns true if $x is not identical to $y


// PHP Conditional Assignment Operators
// The PHP conditional assignment operators are used to set a value depending on conditions:
// Operator	Name	Example	Result
// ?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
// The value of $x is expr2 if expr1 = TRUE.
// The value of $x is expr3 if expr1 = FALSE	
// ??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
// The value of $x is expr1 if expr1 exists, and is not NULL.
// If expr1 does not exist, or is NULL, the value of $x is expr2.
// Introduced in PHP 7




    ?>
</body>
</html>