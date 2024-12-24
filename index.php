<h1>File index.php</h1>
<?php
$my_arry = array(1,2,3,4,5);
// count ($my_array)
for($i = 0; $i < sizeof($my_arry); $i++) {
    echo $my_arry[$i];
    echo "<br>";
}
?>

<?php
/** FILE index.php */
# Comment
// Comment
$my_arry = array(1,array(2),3,4,5,"myindex" => (3+3), "myindex" => 7);
print_r($my_arry);
echo "<br>";
$my_arry2[] = 2;
$my_arry2[4] = 1;
$my_arry2[] = 3;
print_r($my_arry2);

if(FALSE) {
    echo "if false";
} else if(TRUE && FALSE) {
    echo "if true";
} else {
    echo "else";
}
echo "<br>";


$myvar = "Hello World";
$myvar = 1;
echo "<h1>".$myvar."</h1>";
echo "<br>";
$x = 1;
function x() {
    global $x;
    $x = 2;
}
echo $x;
echo "<br>";
x();
echo $x;
echo "<br>";
echo "1.5" + "1";
echo "<br>";
$x = "B";
echo $x++;
echo "<br>";
?>