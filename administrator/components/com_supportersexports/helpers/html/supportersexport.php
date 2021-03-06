<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_supportersexports
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('SupportersexportsHelper', JPATH_ADMINISTRATOR . '/components/com_supportersexports/helpers/supportersexports.php');

/**
 * @package     Joomla.Administrator
 * @subpackage  com_supportersexports
 */
abstract class JHtmlSupportersexport
{
	/**
	 * Get the associated language flags
	 *
	 * @param   int  $supportersexportid  The item id to search associations
	 *
	 * @return  string  The language HTML
	 */
	public static function association($supportersexportid)
	{
	}

}
