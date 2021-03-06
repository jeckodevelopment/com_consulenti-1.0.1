<?php
/**
 * @version     1.0.1
 * @package     com_consulenti
 * @copyright   Copyright (C) 2014 Jecko Development. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Luca Marzo <luca.marzo@live.com> - http://www.jeckodevelopment.com
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Incarichi list controller class.
 */
class ConsulentiControllerIncarichi extends ConsulentiController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Incarichi', $prefix = 'ConsulentiModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}