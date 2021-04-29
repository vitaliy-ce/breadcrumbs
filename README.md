# Хлебные крошки с микроразметкой
Использование класса генерации html кода хлебных крошек с микроразметкой

Добавление по одной ссылке
```php
$breadcrumbs = new Breadcrumbs($add_home_link = true);

$breadcrumbs->addLink('Ссылка 1', '/link-1');
$breadcrumbs->addLink('Ссылка 2', '/link-2');
$breadcrumbs->addLink('Ссылка 3', '/link-3');

$breadcrumbs_html = $breadcrumbs->getHtml();
```

Добавление группы ссылок
```php
$links = [
  ['text' => 'Ссылка 1', 'href' => '/link-1'],
  ['text' => 'Ссылка 2', 'href' => '/link-2'],
  ['text' => 'Ссылка 3', 'href' => '/link-3'],
];

$breadcrumbs = new Breadcrumbs($add_home_link = true);
$breadcrumbs->addLinks($links);

$breadcrumbs_html = $breadcrumbs->getHtml();
```
