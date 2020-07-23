# Хлебные крошки с микроразметкой
Использование класса генерации html кода хлебных крошек с микроразметкой

```php
$breadcrumbs = new Breadcrumbs($add_home_link = true);

$breadcrumbs->addLink('Ссылка 1', '/link-1');
$breadcrumbs->addLink('Ссылка 2', '/link-2');
$breadcrumbs->addLink('Ссылка 3', '/link-3');

$breadcrumbs_html = $breadcrumbs->getHtml();
```
