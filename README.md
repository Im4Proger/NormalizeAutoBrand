# PHP-class for determine the brand name of the car

PHP-class for determine the brand name of the car

## Requirements:
- PHP 8


## Installation

```
See example below.
```


## Example

```php
<?php
include 'Im4Proger/NormalizeAutoBrand/NormalizeAutoBrand.php';
use Im4Proger\NormalizeAutoBrand\NormalizeAutoBrand;

$result_object = new NormalizeAutoBrand('For sale Chevrolet 2015, pre-owned, black.');
$result_brand = $result_object->brand_search;

echo 'result_brand: '.$result_brand;
?>
```


## Features

- [x] determine the brand name of the car