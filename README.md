# Avalon - Language Package

This package makes translating easy.

## Installation

This package can be installed via composer:

    composer require avalon/language

## Usage

````php
use Avalon\Language;

// Create a new translation
$myLanguage = new Language(function ($t) {
    $t->name    = 'My Language';
    $t->locale  = 'en_AU';

    // The index is what we use to fetch the string value
    $t->strings = [
        'my_string_index' => 'My String Value',
        'test_x' => 'Test {1}',
        'hello_x' => 'Hello {username}'
    ];
});

// Set our language as the current language to use by passing the `locale` value
Language::setCurrent('en_AU');

// Translate some stuff
Language::translate('my_string_index'); // => 'My String Value'
Language::translate('test_x', ['Hello']); // => 'Test Hello'
Language::translate('hello_x', ['username' => 'Admin']); // => 'Hello Admin'
````
