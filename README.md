# PHP Variable Scope Bug

This repository demonstrates a common, subtle bug in PHP related to variable scope when using references and closures within functions.  The example showcases how reassignment of a referenced array unexpectedly breaks the reference, leading to unexpected behavior. The solution offers clear alternatives that avoid such issues.

## Bug Description

The core issue lies in the way PHP handles references when used with arrays inside functions.  Reassigning the referenced array within the function disconnects it from the original array, leading to unintended consequences and potential confusion.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.

## Solution

The solution file, `bugSolution.php`, shows how to modify the function to prevent the reference from being broken, ensuring that changes made within the function correctly reflect on the original array.