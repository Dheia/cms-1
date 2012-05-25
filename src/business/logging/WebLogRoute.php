<?php
namespace Blocks;

/**
 *
 */
class WebLogRoute extends \CWebLogRoute
{
	/**
	 * @access protected
	 * @param $view
	 * @param $data
	 * @return mixed
	 */
	protected function render($view, $data)
	{
		$isAjax = b()->request->getIsAjaxRequest();

		if ($this->showInFireBug)
		{
			if ($isAjax && $this->ignoreAjaxInFireBug)
				return;

			$view .= '-firebug';
		}
		else if(!(b() instanceof \CWebApplication) || $isAjax)
			return;

		$viewFile = b()->path->getAppTemplatesPath().'logging/'.$view.'.php';
		include(b()->findLocalizedFile($viewFile,'en'));
	}
}
