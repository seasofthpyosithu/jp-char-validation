## Installing and configuring

Install using composer:

```sh
$ composer require seasofthpyosithu/jp-char-validation
```

If you are using a Laravel version **less than 5.5** you **need to add** the provider on `config/app.php`:

```php
'providers' => [
    // ...
     Seasofthpyosithu\JpCharValidation\JpCharValidationServiceProvider::class,
],
```

## Available rules

- [`hiragana`]
- [`katakana`]
- [`kanji`]
- [`hankaku`]
- [`hankaku_alphanumeric`]
- [`hankaku_alphanumeric_symbol`]
- [`hankaku_number`]
- [`zenkaku`]
- [`zenkaku_alphanumeric`]
- [`zenkaku_alphanumeric_symbol`]
- [`zenkaku_number`]

## Example

```php
$request->validate([
    'content' => 'hiragana'
]);
```

