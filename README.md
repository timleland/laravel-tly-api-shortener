# T.LY Laravel URL Shortener API

This package provides a convenient Laravel wrapper for the T.LY URL Shortener API.

T.LY URL Shortener API documentation to create URLs to track, brand, and share short links. This package aims to help you to work with our API. Please see our [API Docs](https://t.ly/docs) if you have any issues.

## Create an API Key

1. Register a [T.LY Account](https://t.ly/register)
2. Create an [API Token](https://t.ly/settings#/api)

## Installation

Install via Composer:

```bash
composer require tly/laravel-url-shortener-api
```

Publish the configuration:

```bash
php artisan vendor:publish --provider="TLY\\LaravelUrlShortener\\TLYServiceProvider" --tag=config
```

Set your API token in `.env`:

```plaintext
TLY_API_TOKEN=your_api_token_here
```

## Usage

### Create a Short Link

```php
use TLY\LaravelUrlShortener\Facades\TLYApi;

$response = TLYApi::create([
    'long_url' => 'https://example.com',
    'description' => 'Example Link',
]);


```

### Update a Short Link

```php
use TLY\LaravelUrlShortener\Facades\TLYApi;

$response = TLYApi::update([
    'short_url' => 'https://t.ly/123',
    'long_url' => 'https://new-destination.com',
    'description' => 'Updated Link Description',
    'expire_at_datetime' => '2035-12-31 23:59:59',
]);

```

### Delete a Short Link

```php
use TLY\LaravelUrlShortener\Facades\TLYApi;

$response = TLYApi::delete('https://t.ly/123');

```

### Get a Short Link

```php
use TLY\LaravelUrlShortener\Facades\TLYApi;

$response = TLYApi::get('https://t.ly/123');

```

### Get the stats for a Short Link

```php
use TLY\LaravelUrlShortener\Facades\TLYApi;

$response = TLYApi::stats('https://t.ly/123');

```

## License

This package is licensed under the MIT License.
