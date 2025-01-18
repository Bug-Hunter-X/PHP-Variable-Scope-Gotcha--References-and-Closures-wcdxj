In PHP, a common yet subtle error arises when dealing with variable scope within functions, especially when using references or closures. Consider this example:

```php
function modifyArray(array &$arr) {
  $arr[] = 4; // Modifies the original array
  $local = &$arr; // Creates an alias
  $local[] = 5; // Also modifies the original array
  $another = [6,7,8];
  $arr = $another; // This breaks the original array reference
}

$myArray = [1, 2, 3];
modifyArray($myArray);
print_r($myArray); // Output will be Array ( [0] => 6 [1] => 7 [2] => 8 )
```

The unexpected behavior occurs in the last line of `modifyArray`. By assigning a new array to `$arr`, we break the reference to the original `$myArray`. The original array is no longer modified after the reassignment. This is because the reference is not inherently tied to the memory location but to the variable itself, and that variable is changed to hold a new array.

Another way this can manifest is through the use of closures. The scope of variables used in closures are very important, and if not handled carefully, can lead to unexpected behavior and hard-to-find bugs.