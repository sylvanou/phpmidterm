<?php

// Part 1
function countWords($str) {
  $strArr = explode(' ', strtolower($str));
  $newStr = [];
  foreach($strArr as $st) {
    $newStr["$st"] = substr_count($str, $st, 0);
  }
  return ($newStr);
}

// $str = "Hello hello potato hello potato banana";
// countWords($str);

if (isset($_GET['words'])) {
    //be sure to validate and clean your variables
  $str = htmlentities($_GET['words']);

    //then you can use them in a PHP function. 
  $result = countWords($str);
}
?>

<!-- Part 2 -->
<form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
  <input type="text" name="words">
  <button type="submit" value="submit">Submit</button>
</form>

<!-- Part 3 print the result above the form -->
<?php if (isset($result)) {
  arsort($result);
  foreach ($result as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
}

?>