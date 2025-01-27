```php
<?php
function my_function($a, $b) {
  if ($a > $b) {
    return $a;
  } elseif ($b > $a) {
    return $b;
  } else {
    return $a; // Or $b;  Consistent return when inputs are equal
  }
}

$result = my_function(5, 10);
echo $result; // Outputs 10

$result = my_function(10, 5);
echo $result; // Outputs 10

$result = my_function(0, 0);
echo $result; // Outputs 0
?>
```