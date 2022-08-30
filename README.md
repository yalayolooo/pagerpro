# ISPagerPro

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

A library to split results into miltiple pages

## Install

Via Composer

``` bash
$ composer require yalayolooo/pagerpro
```

## Usage

``` php
$obj = new ISPagerPro\DirPage(
    new ISPagerPro\PagesList(),
    'photos',
    3,
    2
);
echo "<pre>";
print_r($obj->getItems());
echo "</pre>";
echo "<p>$obj</p>";
```

``` php
$obj = new ISPagerPro\FilePager(
    new ISPagerPro\ItemsRange(),
    'largertextfile.txt'
);
echo "<pre>";
echo "<p>$obj</p>";
```

``` php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=test',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $obj = new ISPagerPro\PdoPage(
        new ISPagerPro\ItemsRange(),
        $pdo,
        'table_name'
    );
    echo "<pre>";
    print_r($obj->getItems());
    echo "</pre>";
    echo "<p>$obj</p>";
}
catch (PDOException $e){
    echo "Can't connect to database";
}
```

## License

The MIT License (MIT). Please see [License File] (https://github.com/dnoegel/php-xdg-base-dir/blob/master/LICENSE) for more information.