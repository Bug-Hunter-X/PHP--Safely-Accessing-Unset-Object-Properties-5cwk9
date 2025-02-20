The solution uses `isset()` to check if the property is set before accessing it:

```php
class MyClass {
    public $name;
}

$obj = new MyClass();
if (isset($obj->name)) {
    echo $obj->name;
} else {
    echo 'Property not set';
}
```

Alternatively, `property_exists()` can be used for more robust checking (especially useful for dealing with private/protected members):

```php
class MyClass {
    public $name;
    private $age;
}

$obj = new MyClass();
if (property_exists($obj, 'name')) {
    echo $obj->name; //Access Public Property
}

if (property_exists($obj, 'age')) {
    echo $obj->age; // Access Private Property (Error)
}
```
Note that accessing a private property using `$obj->age` will still result in an error even if `property_exists` returns `true`.  Proper getter/setter methods are the preferred way to handle access to private/protected properties.