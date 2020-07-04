# Хлебные крошки с микроразметкой
Использование функции генерации html кода хлебных крошек с микроразметкой

```php
$links = []
$links[] = array('name' => 'Страница 1', 'link' => '/page-1');
$links[] = array('name' => 'Страница 2', 'link' => '/page-2');

$breadcrumbs_html = breadcrumbs($links);
```
