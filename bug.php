```php
<?php
function my_function($a, $b) {
  if ($a > $b) {
    return $a;
  } else {
    return $b; 
  }
}

$result = my_function(5, 10);
echo $result; // Outputs 10

$result = my_function(10, 5);
echo $result; // Outputs 10

$result = my_function(0, 0); //This will cause an unexpected result
echo $result; // Outputs 0
?>
```