<?php
/**
 * @package     Joomla.Test
 * @subpackage  AcceptanceTester.Page
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Page\Acceptance\Administrator;

/**
 * Acceptance Page object class to define Fields Manager page objects.
 *
 * @package  Page\Acceptance\Administrator
 *
 * @since    __DEPLOY_VERSION__
 */
class FieldsManagerPage_New extends AdminPage
{
	/**
	 * Locator for field label
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $label = ['id' => 'jform_label'];

	/**
	 * Locator for field alias
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $alias = ['id' => 'jform_alias'];

	/**
	 * Locator for field description
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $description = ['id' => 'jform_description'];

	/**
	 * Link to the article listing page.
	 *
	 * @var    string
	 * @since  __DEPLOY_VERSION__
	 */
	public static $url = "/administrator/index.php?option=com_fields&view=field&layout=edit&context=com_content.article";

	/**
	 * Locator for field type
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $type = ['id' => 'jform_type'];

	/**
	 * Locator for field type
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $access = ['id' => 'jform_access'];

	/**
	 * Locator for field type
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $language = ['id' => 'jform_language'];

	/**
	 * Locator for field type
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $note = ['id' => 'jform_note'];

	/**
	 * Locator for field default_value
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $default_value = ['id' => 'jform_default_value'];

	/**
	 * Locator for field fieldparams_format
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $format = ['id' => 'jform_fieldparams_format'];

	/**
	 * Locator for field required
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $required = ['id' => 'jform_required'];

	/**
	 * Locator for field state
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $state = ['id' => 'jform_state'];

	/**
	 * Locator for field jform_cat_ids
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $cat_ids = ['id' => 'jform_assigned_cat_ids_chzn'];

	/**
	 * Locator for field jform_catid
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $catid = ['id' => 'jform_catid'];

	/**
	 * Locator for field jform_fieldparams_options_button 
	 * Attention this is for insert values into checkbox fields
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $options_button = ['id' => 'jform_fieldparams_options_button'];

	/**
	 * Locator for field jform_fieldparams_options_button
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $thumbnail_width = ['id' => 'jform_fieldparams_thumbnail_width'];

	/**
	 * Locator for field jform_fieldparams_options_max_width
	 * Max width of the gallery field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $max_width = ['id' => 'jform_fieldparams_max_width'];

	/**
	 * Locator for field jform_fieldparams_options_max_height
	 * Max height of the gallery field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $max_height = ['id' => 'jform_fieldparams_max_height'];

	/**
	 * Locator for field jform_fieldparams_options_recursive
	 * Recursive in gallery field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $recursive = ['id' => 'jform_fieldparams_recursive'];

	/**
	 * Locator for field jform_fieldparams_options_multiple
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $multiple = ['id' => 'jform_fieldparams_multiple'];

	/**
	 * Locator for field jform_fieldparams_options_directory
	 * Directory of the gallery and image field (text) and the image field (select)
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $directory = ['id' => 'jform_fieldparams_directory'];

	/**
	 * Locator for field jform_fieldparams_options_buttons
	 * Attention this is for hide buttons in edit field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $buttons = ['id' => 'jform_fieldparams_buttons'];

	/**
	 * Locator for field jform_fieldparams_options_hide
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $hide = ['id' => 'jform_fieldparams_hide'];

	/**
	 * Locator for field jform_fieldparams_options_width
	 * Width of the edit field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $width = ['id' => 'jform_fieldparams_width'];

	/**
	 * Locator for field jform_fieldparams_options_height
	 * Height of the editor field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $height = ['id' => 'jform_fieldparams_height'];

	/**
	 * Locator for field jform_fieldparams_options_rows
	 * Rows of the editor field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $rows = ['id' => 'jform_fieldparams_rows'];

	/**
	 * Locator for field jform_fieldparams_options_cols
	 * columns of the editor field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $cols = ['id' => 'jform_fieldparams_cols'];

	/**
	 * Locator for field jform_fieldparams_options_image_class
	 * image_class of the image field, media field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $image_class = ['id' => 'jform_fieldparams_image_class'];

	/**
	 * Locator for field jform_fieldparams_options_first
	 * columns of the integer field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $first = ['id' => 'jform_fieldparams_first'];

	/**
	 * Locator for field jform_fieldparams_options_last
	 * columns of the integer field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $last = ['id' => 'jform_fieldparams_last'];

	/**
	 * Locator for field jform_fieldparams_options_step
	 * columns of the integer field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $step = ['id' => 'jform_fieldparams_step'];

	/**
	 * Locator for field jform_fieldparams_options_preview
	 * preview of the media field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $preview = ['id' => 'jform_fieldparams_preview'];

	/**
	 * Locator for field jform_fieldparams_options_home
	 * home of the media field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $home = ['id' => 'jform_fieldparams_home'];

	/**
	 * Locator for field jform_fieldparams_options_query
	 * query of the sql field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $query = ['id' => 'jform_fieldparams_query'];

	/**
	 * Locator for field jform_fieldparams_options_schemes
	 * schemes of the url field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $schemes = ['id' => 'jform_fieldparams_schemes_chzn'];

	/**
	 * Locator for field jform_fieldparams_options_relative
	 * relative of the url field
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $relative = ['id' => 'jform_fieldparams_relative'];
}
