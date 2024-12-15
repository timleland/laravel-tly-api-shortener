# T.LY Laravel URL Shortener API

This package provides a convenient Laravel wrapper for the T.LY URL Shortener API.

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
### More Documentation in `README`
## License

This package is licensed under the MIT License.
