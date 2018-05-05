# Laravel REST Hooks
Package that handles subscribing, deleting, and firing REST Hooks.

## How to use
```bash
composer require se468/laravel-rest-hooks
php artisan migrate
```

## Usage

### Subscribe a webhook endpoint
```bash
POST /api/hooks
```

with data 
```
data: 
{
    "target_url": "https://rest-hook-target.com/<unique_path>", //Your Hook URL
    "event": "user_created" //Your Hook Event
}
```


Will create a new RestHook and store it. 

### Delete a webhook endpoint
```bash
DELETE /api/hooks/{id}
```

Will delete RestHook with that id.

### Firing RestHook with Data
```php
$data = [
    'foo' => 'bar' 
];

$resthook = RestHook::find(1);
$resthook->fire($data);
```