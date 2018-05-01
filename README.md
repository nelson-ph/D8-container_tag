# Container tag

Extends core container, so that we can pass the tag that will be used as container.

## Install

* Require it with composer:
`composer require nelson-ph/container_tag`
* Install the module as any other module.

## Usage

Programmatically:

```php
$element=[
  '#type'=>'container_tag,
  '#tag'=>'strong',
  'container_values'=>[
    'markup'=>[
      '#markup'=>'simple markup',
    ],
  ],
];
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
