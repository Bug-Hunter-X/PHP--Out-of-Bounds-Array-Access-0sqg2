This improved code checks if the index is within the valid range of the array before accessing the element.  This prevents the `Undefined offset` error.
```php
$myArray = ["apple", "banana", "orange"];
$index = 3;

if (isset($myArray[$index])) {
  echo $myArray[$index];
} else {
  echo "Index is out of bounds";
}
```