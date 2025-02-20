# PHP: Safely Accessing Unset Object Properties

This repository demonstrates a common PHP bug related to accessing object properties that might not be set and provides a solution to mitigate the problem.

## The Bug

In PHP, directly accessing an object property without first checking if it exists can result in unexpected behavior, such as `E_NOTICE` warnings or unexpected `NULL` values. This can lead to difficult-to-debug issues.

## The Solution

The solution involves using `isset()` or `property_exists()` before accessing the property, thus ensuring that the property exists and contains a value before using it.

## How to Run

1. Clone this repository.
2. Navigate to the repository's directory.
3. Run `php bug.php` to see the error.
4. Run `php bugSolution.php` to see the corrected code.