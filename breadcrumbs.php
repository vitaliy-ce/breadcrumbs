<?php

/**
 * Генерация хлебных крошек с микроразметкой. Пример передаваемого массива: $links[] = array('name' => 'Услуги', 'link' => '/services'); 
 * 
 * @param  array  $links  Пример передаваемого массива: $links[] = array('name' => 'Услуги', 'link' => '/services'); 
 * @return string         html код хлебных крошек
 */
function breadcrumbs($links = array()) {
	$i = 1;
	$html = '<ul class="breadcrumb simple" itemscope="" itemtype="http://schema.org/BreadcrumbList">';
		$html .= '
			<li class="home_lnk" itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
				<a href="/" itemprop="item"><span itemprop="name">Главная<span></a>
				<meta itemprop="position" content="'.$i.'">
			</li>';
			
			if (!empty($links)) {
				foreach ($links as $key => $item) {
					$i++;
					if (isset($item['link']) && $item['link'] != '' && ($key +1 ) < count($links)) {
						$html .= '
							<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
								<a href="'.$item['link'].'" itemprop="item"><span itemprop="name">'.$item['name'].'<span></a>
								<meta itemprop="position" content="'.$i.'">
							</li>';							
					} else {
						$html .= '
							<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
								<span itemprop="name">'.$item['name'].'<span>
								<meta itemprop="item" content="https://'.$_SERVER['SERVER_NAME'].parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH).'">
								<meta itemprop="position" content="'.$i.'">
							</li>';								
					}
				}
			}
	$html .= '</ul>';
	
	return $html;
}