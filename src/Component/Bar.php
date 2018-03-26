<?php
namespace Sellastica\Bar\Component;

class Bar extends \Sellastica\AdminUI\Component\BaseControl
{
	/** @var array */
	private $links = [];


	/**
	 * @param string $title
	 * @param string $url
	 */
	public function addLink(string $title, string $url)
	{
		$this->links[] = [$title, $url];
	}

	/**
	 * @param array $params
	 */
	protected function beforeRender(array $params = [])
	{
		$this->template->links = $this->links;
	}
}