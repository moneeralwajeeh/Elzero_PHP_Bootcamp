<?php
// Assignment One
echo 15.2 + 14.7 + (10.5 + 10.5); // 50
echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
echo "<br>";
echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5);
echo "<br>";
echo gettype((int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5));

// Assignment Two

echo "<br>";
echo "<br>";
echo gettype(100);
echo "<br>";
var_dump(100);
echo "<br>";
echo "<br>";


// Assignment Three

echo "Hello \"Elzero\" \\\ \"\"\" We Love \"$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo "<br>";
echo "<br>";

// Assignment Four

echo "We \n Love \n Elzero \n Web \n School";
echo "<br>";
echo "<br>";
echo nl2br("We
            Love
            Elzero
            Web
            School");

echo "<br>";
echo "<br>";

// Assignment Five

echo nl2br(<<<'new'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
new);
echo "<br>";
echo "<br>";


// Assignment Six
// The Error was the space befor the name of Heredoc

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;


echo "<br>";
echo "<br>";

// Assignment Seven
echo "Hello PHP";
echo '<br>';
echo "Hello PHP";
echo '<br>';

echo ((boolean) "Hello PHP");
echo '<br>';
echo gettype((int) "Hello PHP");

echo "<br>";
echo "<br>";

// Assignment Eight

// echo '<pre>';
// print_r (Array([FrontEnd] => Array([0] => HTML,[1] => CSS,[JS] => Array
//         (
//           [Vuejs] => Array([2] => v2, [3] => v3),
//           [0] => Reactjs,
//           [1] => Svelte
//         )
//     ));
// echo '<pre>';




