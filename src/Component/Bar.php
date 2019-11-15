<?php
namespace Sellastica\Bar\Component;

class Bar extends \Sellastica\AdminUI\Component\BaseControl
{
	/** @var array */
	private $links = [];


	/**
	 * @param string $title
	 * @param string|null $url
	 * @param bool $openInNewWindow
	 */
	public function addLink(
		string $title,
		string $url = null,
		bool $openInNewWindow = false
	)
	{
		$this->links[] = [$title, $url, $openInNewWindow];
	}

	/**
	 * @param array $params
	 */
	protected function beforeRender(array $params = [])
	{
		$this->template->links = $this->links;
	}
}