# PHP Unexpected Function Behavior with Equal Inputs

This repository demonstrates a subtle bug in a PHP function that leads to unexpected behavior when both input values are equal.  The function `my_function` is intended to return the larger of two numbers, but it doesn't explicitly handle the case where both numbers are identical.

The `bug.php` file contains the erroneous code, while `bugSolution.php` provides a corrected version.

## Bug Description

The `my_function` function lacks a robust comparison for equality. When both input numbers are the same, it returns one of them arbitrarily, which can lead to unexpected results in applications that rely on a consistent output in such cases.