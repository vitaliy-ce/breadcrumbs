<?php

/**
 * Генерация хлебных крошек с микроразметкой
 */
class Breadcrumbs {
	private $links;

	public function __construct($add_home_link = true) {
		$this->$links = [];
		if ($add_home_link) {
			$this->addLink('Главная', '/');			
		}
	}

	public function addLink($name, $link = '') {
		$this->$links[] = [
			'name' => trim($name),
			'link' => trim($link),
		];
	}

	public function getHtml() {
		$html = '';

		if (!empty($this->$links)) {
			$html = '<ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">';
		
			foreach ($this->$links as $key => $item) {
				if (isset($item['link']) && $item['link'] != '' && ($key+1) < count($this->$links)) {
					$html .= '
						<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							<a href="'.$item['link'].'" itemprop="item"><span itemprop="name">'.$item['name'].'<span></a>
							<meta itemprop="position" content="'.($key+1).'">
						</li>
					';							
				} else {
					$html .= '
						<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							<span itemprop="name">'.$item['name'].'<span>
							<meta itemprop="item" content="'.$item['link'].'">
							<meta itemprop="position" content="'.($key+1).'">
						</li>
					';								
				}
			}
			$html .= '</ul>';
		}
	
		return $html;
	}
}