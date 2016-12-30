<?php

/**
 * @package     Joomla.Test
 * @subpackage  AcceptanceTester.Step
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Step\Acceptance\Administrator;

use Page\Acceptance\Administrator\FieldsManagerPage;
use Page\Acceptance\Administrator\FieldsManagerPage_New;

/**
 * Acceptance Step object class contains suits for Content Manager.
 *
 * @package  Step\Acceptance\Administrator
 *
 * @since    __DEPLOY_VERSION__
 */
class Fields extends Admin
{
	/**
	 * Method to click toolbar button new from article manager listing page.
	 *
	 * @Given There is a add field link
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function thereIsAAddFieldLink()
	{
		$I = $this;

		$I->amOnPage(FieldsManagerPage::$url);
	}

	/**
	 * Method to fill the title field
	 *
	 * @param   string  $title  The field title
	 *
	 * @Given I fill field title with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldTitleWith($title)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$title, $title);
	}

	/**
	 * Method to fill the alias field
	 *
	 * @param   string  $alias  The field alias
	 *
	 * @Given I fill field alias with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldAliasWith($alias)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$alias, $alias);
	}

	/**
	 * Method to fill the type field
	 *
	 * @param   string  $type  The field type
	 *
	 * @Given I select field type :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldType($type)
	{
		$I = $this;

		$I->selectOptionInChosenById(FieldsManagerPage_New::$type['id'], $type);
	}

	/**
	 * Method to fill the label field
	 *
	 * @param   string  $label  The field label
	 *
	 * @Given I fill field label  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldLabelWith($label)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$label, $label);
	}

	/**
	 * Method to fill the description field
	 *
	 * @param   string  $description  The field description
	 *
	 * @Given I fill field description  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldDescriptionWith($description)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$description, $description);
	}

	/**
	 * Method to fill the default value field
	 *
	 * @param   string  $default_value  The field default value
	 *
	 * @Given I fill field default_value  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldDefault_valueWith($default_value)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$default_value, $default_value);
	}

	/**
	 * Method to fill the format field
	 *
	 * @param   string  $format  The field format
	 *
	 * @Given I fill field format  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldFieldparams_formatWith($format)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$format, $format);
	}

	/**
	 * Method to fill the required field
	 *
	 * @param   string  $arg  The field required
	 *
	 * @Given I check option required :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCheckOptionRequired($arg)
	{
		$I = $this;

		$I->click("//fieldset[@id='" . FieldsManagerPage_New::$required['id'] . "']/label[contains(normalize-space(string(.)), '" . $arg . "')]");
	}

	/**
	 * Method to fill the state field
	 *
	 * @param   string  $state  The field state
	 *
	 * @Given I select field state :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldState($state)
	{
		$I = $this;

		$I->selectOptionInChosenById(FieldsManagerPage_New::$state['id'], $state);
	}

	/**
	 * Method to fill the field group field
	 *
	 * @param   string  $catid  The field field group
	 *
	 * @Given I select field group :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldGroup($catid)
	{
		$I = $this;

		$I->selectOptionInChosenById(FieldsManagerPage_New::$catid['id'], $catid);
	}

	/**
	 * Method to select a category in the categories field
	 *
	 * @param   string  $cat_ids  The categories
	 *
	 * @Given I select field cat :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldCat($cat_ids)
	{
		$I = $this;

		$I->click('#' . FieldsManagerPage_New::$cat_ids['id']);
		$I->click("//div[@id='" . FieldsManagerPage_New::$cat_ids['id'] .
				"']/div/ul/li[contains(normalize-space(string(.)), '" . $cat_ids . "')]");
	}

	/**
	 * Method to unselect a category in the categories field
	 *
	 * @param   string  $cat_ids  The categrories
	 *
	 * @Given I unselect field cat :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iUnselectFieldCats($cat_ids)
	{
		$I = $this;

		$I->click("//div[@id='" . FieldsManagerPage_New::$cat_ids['id'] .
				"']/ul/li/span[contains(normalize-space(string(.)), '" . $cat_ids .
				"')]/following-sibling::a[1]");
	}

	/**
	 * Method to fill the access field
	 *
	 * @param   string  $access  The access
	 *
	 * @Given I select field access :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldAccess($access)
	{
		$I = $this;

		$I->scrollTo(['css' => '#'. FieldsManagerPage_New::$access['id']], 20, 100);		
		$I->selectOptionInChosenById(FieldsManagerPage_New::$access['id'], $access);
	}

	/**
	 * Method to fill the language field
	 *
	 * @param   string  $language  The language
	 *
	 * @Given I select field language :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldLanguage($language)
	{
		$I = $this;

		$I->scrollTo(['css' => '#'. FieldsManagerPage_New::$language['id']], 20, 100);		
		$I->selectOptionInChosenById(FieldsManagerPage_New::$language['id'], $language);
	}

	/**
	 * Method to fill the note field
	 *
	 * @param   string  $note  The note
	 *
	 * @Given I fill field note with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldNoteWith($note)
	{
		$I = $this;

		$I->scrollTo(['css' => '#'. FieldsManagerPage_New::$note['id']], 20, 100);		
		$I->fillField(FieldsManagerPage_New::$note, $note);
	}

	/**
	 * Method to fill the options field for custom field list, checkbox and radio
	 *
	 * @param   string  $names_values  The options
	 *
	 * @Given I fill field options
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldOptions($names_values)
	{
		$I = $this;

		$I->scrollTo("//button[@id='" . FieldsManagerPage_New::$options_button['id'] . "']");
		$I->click("//button[@id='" . FieldsManagerPage_New::$options_button['id'] . "']");

		$totalRows = count($names_values->getRows());
		$lastIndex = ($totalRows - 1);

		foreach ($names_values->getRows() as $index => $row)
		{
			if ($index !== 0)
			{
				$I->fillField('#' . $index . '-jform_name', $row[0]);
				$I->fillField('#' . $index . '-jform_value', $row[1]);

				if ($index == $lastIndex)
				{
					$I->click('.save-modal-data');
				}
				else
				{
					$I->click('.add');
				}
			}
		}
	}

	/**
	 * Method to fill the thumbnailswidth field for custom field gallery
	 *
	 * @param   string  $thumb  The thumbnailwidth
	 *
	 * @Given I fill field ThumbnailWidth  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldThumbnailWidthWith($thumb)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$thumbnail_width, $thumb);
	}

	/**
	 * Method to fill the maxwidth field for custom field gallery
	 *
	 * @param   string  $maxwidth  The maxwidth
	 *
	 * @Given I fill field MaxWidth  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldMaxWidthWith($maxwidth)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$max_width, $maxwidth);
	}

	/**
	 * Method to fill the maxheight field for custom field gallery
	 *
	 * @param   string  $maxheight  The maxheigth
	 *
	 * @Given I fill field MaxHeight  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldMaxHeightWith($maxheight)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$max_height, $maxheight);
	}

	/**
	 * Method to fill the recursive field for custom field gallery
	 *
	 * @param   string  $arg  The recursive
	 *
	 * @Given I check option recursive :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCheckOptionRecursive($arg)
	{
		$I = $this;

		$I->click("//fieldset[@id='" . FieldsManagerPage_New::$recursive['id'] . "']/label[contains(normalize-space(string(.)), '" . $arg . "')]");
	}

	/**
	 * Method to fill the multiple field for custom field gallery, image, integer, list, sql, userfield and usergroup
	 *
	 * @param   string  $arg  The multiple
	 *
	 * @Given I check option multiple :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCheckOptionMultiple($arg)
	{
		$I = $this;

		$I->scrollTo("//fieldset[@id='" . FieldsManagerPage_New::$multiple['id'] . "']");
		$I->click("//fieldset[@id='" . FieldsManagerPage_New::$multiple['id'] . "']/label[contains(normalize-space(string(.)), '" . $arg . "')]");
	}

	/**
	 * Method to fill the directory field for custom field gallery and media
	 * Attention: In image field directory is a select field -> use iSelectFieldDirectoryWith
	 *
	 * @param   string  $directory  The directory
	 *
	 * @Given I fill field directory  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldDirectoryWith($directory)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$directory, $directory);
	}

	/**
	 * Method to click field for hiding buttons in editor field
	 *
	 * @param   string  $arg  The arg (yes or no)
	 *
	 * @Given I check option buttons :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCheckOptionButtons($arg)
	{
		$I = $this;

		$I->click("//fieldset[@id='" . FieldsManagerPage_New::$buttons['id'] . "']/label[contains(normalize-space(string(.)), '" . $arg . "')]");
	}

	/**
	 * Method to fill the hide field for custom field editor
	 *
	 * @param   string  $hide  The fields to hide
	 *
	 * @Given I fill field hide  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldHideWith($hide)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$hide, $hide);
	}

	/**
	 * Method to fill the width field for custom field editor
	 *
	 * @param   string  $width  The width
	 *
	 * @Given I fill field width  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldWidthWith($width)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$width, $width);
	}

	/**
	 * Method to fill the height field for custom field editor
	 *
	 * @param   string  $height  The height
	 *
	 * @Given I fill field height  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldHeightWith($height)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$height, $height);
	}

	/**
	 * Method to fill the row field for custom field editor and textare
	 *
	 * @param   string  $rows  The rows
	 *
	 * @Given I fill field rows  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldRowsWith($rows)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$rows, $rows);
	}

	/**
	 * Method to fill the columns field for custom field editor and textarea
	 *
	 * @param   string  $cols  The columns
	 *
	 * @Given I fill field cols  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldColsWith($cols)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$cols, $cols);
	}

	/**
	 * Method to fill the directory field for custom field image
	 * Attention: In gallery and media field directory is a text field -> use iFillFieldDirectoryWith
	 *
	 * @param   string  $directory  The directory
	 *
	 * @Given I select field directory  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldDirectoryWith($directory)
	{
		$I = $this;

		$I->selectOptionInChosenById(FieldsManagerPage_New::$directory['id'], $directory);
	}

	/**
	 * Method to fill the image_class field for custom field image
	 *
	 * @param   string  $image_class  The image_class
	 *
	 * @Given I fill field image_class  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldImage_classWith($image_class)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$image_class, $image_class);
	}

	/**
	 * Method to fill the first field for custom field integer
	 *
	 * @param   string  $first  The first value
	 *
	 * @Given I fill field first  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldFirstWith($first)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$first, $first);
	}

	/**
	 * Method to fill the last field for custom field integer
	 *
	 * @param   string  $last  The last value
	 *
	 * @Given I fill field last  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldLastWith($last)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$last, $last);
	}

	/**
	 * Method to fill the step field for custom field integer
	 *
	 * @param   string  $step  The step value
	 *
	 * @Given I fill field step  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldStepWith($step)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$step, $step);
	}

	/**
	 * Method to fill the preview field for custom field media
	 *
	 * @param   string  $preview  The preview
	 *
	 * @Given I select field preview :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldPreview($preview)
	{
		$I = $this;

		$I->selectOptionInChosenById(FieldsManagerPage_New::$preview['id'], $preview);
	}

	/**
	 * Method to fill the home field for custom field media
	 *
	 * @param   string  $arg  The home
	 *
	 * @Given I check option home :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCheckOptionHome($arg)
	{
		$I = $this;

		$I->click("//fieldset[@id='" . FieldsManagerPage_New::$home['id'] . "']/label[contains(normalize-space(string(.)), '" . $arg . "')]");
	}

	/**
	 * Method to fill the query field for custom field sql
	 *
	 * @param   string  $query  The query
	 *
	 * @Given I fill field query  with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldQueryWith($query)
	{
		$I = $this;

		$I->fillField(FieldsManagerPage_New::$query, $query);
	}

	/**
	 * Method to select the schemes field for custom field url
	 *
	 * @param   string  $schemes  The schemes
	 *
	 * @Given I select field schemes :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSelectFieldSchemes($schemes)
	{
		$I = $this;

		$I->click('#' . FieldsManagerPage_New::$schemes['id']);
		$I->click("//div[@id='" . FieldsManagerPage_New::$schemes['id'] . "']/div/ul/li[contains(normalize-space(string(.)), '" . $schemes . "')]");
	}

	/**
	 * Method to unselect the schemes field for custom field url
	 *
	 * @param   string  $schemes  The schemes
	 *
	 * @Given I unselect field schemes :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iUnselectFieldSchemes($schemes)
	{
		$I = $this;

		$I->click("//div[@id='" . FieldsManagerPage_New::$schemes['id'] .
				"']/ul/li/span[contains(normalize-space(string(.)), '" . $schemes .
				"')]/following-sibling::a[1]");
	}

	/**
	 * Method to check the relative field for custom field url
	 *
	 * @param   string  $arg  The relative value
	 *
	 * @Given I check option relative :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCheckOptionRelative($arg)
	{
		$I = $this;

		$I->click("//fieldset[@id='" . FieldsManagerPage_New::$relative['id'] . "']/label[contains(normalize-space(string(.)), '" . $arg . "')]");
	}

	/**
	 * Method to fill all fields for a custom field
	 *
	 * @param   string  $field_params  The field_params
	 *
	 * @When I fill fields for creating Field
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iFillFieldsForCreatingField($field_params)
	{
		$I = $this;

		$I->adminPage->clickToolbarButton('New');

		$totalRows = count($field_params->getRows());
		$lastIndex = ($totalRows - 1);

		// Iterate over all rows
		foreach ($field_params->getRows() as $index => $row)
		{
			if ($index !== 0)
			{
				// Standard
				if (isset($row[0]) and !empty($row[0]))
				{
					$I->fillField(FieldsManagerPage_New::$title, $row[0]);
				}

				if (isset($row[1]) and !empty($row[1]))
				{
					$I->selectOptionInChosenById(FieldsManagerPage_New::$type['id'], $row[1]);
				}

				if (isset($row[2]) and !empty($row[2]))
				{
					$I->fillField(FieldsManagerPage_New::$label, $row[2]);
				}

				if (isset($row[3]) and !empty($row[3]))
				{
					$I->fillField(FieldsManagerPage_New::$description, $row[3]);
				}

				if (isset($row[4]) and !empty($row[4]))
				{
					$this->iCheckOptionRequired($row[4]);
				}

				if (isset($row[5]) and !empty($row[5]))
				{
					$I->fillField(FieldsManagerPage_New::$default_value, $row[5]);
				}

				if (isset($row[6]) and !empty($row[6]))
				{
					$I->selectOptionInChosenById(FieldsManagerPage_New::$state['id'], $row[6]);
				}

				if (isset($row[7]) and !empty($row[7]))
				{
					$I->selectOptionInChosenById(FieldsManagerPage_New::$catid['id'], $row[7]);
				}

				// I cant use 
				if (isset($row[8]) and !empty($row[8]))
				{
					$I->click('#' . FieldsManagerPage_New::$cat_ids['id']);
					$I->click("//div[@id='" . FieldsManagerPage_New::$cat_ids['id'] .
							"']/div/ul/li[contains(normalize-space(string(.)), '" . $row[8] .
							"')]");
					$I->click("//div[@id='" . FieldsManagerPage_New::$cat_ids['id'] .
							"']/ul/li/span[contains(normalize-space(string(.)), 'All')]/following-sibling::a[1]");
				}

				if (isset($row[9]) and !empty($row[9]))
				{
					$this->iSelectFieldAccess($row[9]);
				}

				if (isset($row[10]) and !empty($row[10]))
				{
					$this->iSelectFieldLanguage($row[10]);
				}

				if (isset($row[11]) and ! empty($row[11]))
				{
					$this->iFillFieldNoteWith($row[11]);
				}

				// CALENDARFIELD
				if ($row[1] == "Calendar" and isset($row[12]) and !empty($row[12]))
				{
					$I->fillField(FieldsManagerPage_New::$format, $row[12]);
				}

				// CHECKBOX LIST and RADIO
				if (($row[1] == "Checkboxes" or $row[1] == "List" or $row[1] == "Radio") and isset($row[13]) and !empty($row[13]))
				{
					$arr = explode(',', $row[13]);
					$I->scrollTo("//button[@id='" . FieldsManagerPage_New::$options_button['id'] . "']");
					$I->click("//button[@id='" . FieldsManagerPage_New::$options_button['id'] . "']");

					$max = sizeof($arr);

					$I->comment(print_r($arr) . $max);

					foreach ($arr as $index => $item)
					{
						$I->comment($index . $item);
						$css = $index + 1;
						$I->fillField('#' . $css . '-jform_name', $item);
						$I->fillField('#' . $css . '-jform_value', $item);

						if ($max - 1 == $index)
						{
							$I->click('.save-modal-data');
						}
						else
						{
							$I->click('.add');
						}
					}
				}

				// Editor
				if ($row[1] == "Editor" and isset($row[14]) and !empty($row[14]))
				{
					$I->click("//fieldset[@id='" . FieldsManagerPage_New::$buttons['id'] . "']/label[contains(normalize-space(string(.)), '" . $row[14] . "')]");
				}

				if ($row[1] == "Editor" and isset($row[15]) and !empty($row[15]))
				{
					$I->fillField(FieldsManagerPage_New::$hide, $row[15]);
				}

				if ($row[1] == "Editor" and isset($row[16]) and !empty($row[16]))
				{
					$I->fillField(FieldsManagerPage_New::$width, $row[16]);
				}
				
				if ($row[1] == "Editor" and isset($row[17]) and !empty($row[17]))
				{
					$I->fillField(FieldsManagerPage_New::$height, $row[17]);
				}
				
				// Editor and Textarea
				if (($row[1] == "Editor" or $row[1] == "Textarea") and isset($row[18]) and !empty($row[18]))
				{
					$I->fillField(FieldsManagerPage_New::$rows, $row[18]);
				}

				if (($row[1] == "Editor" or $row[1] == "Textarea") and isset($row[19]) and !empty($row[19]))
				{
					$I->fillField(FieldsManagerPage_New::$cols, $row[19]);
				}
				
				// Gallery
				if (($row[1] == "Gallery") and isset($row[20]) and !empty($row[20]))
				{
					$this->iFillFieldThumbnailWidthWith($row[20]);
				}

				if (($row[1] == "Gallery") and isset($row[21]) and !empty($row[21]))
				{
					$this->iFillFieldMaxWidthWith($row[21]);
				}

				if (($row[1] == "Gallery") and isset($row[22]) and !empty($row[22]))
				{
					$this->iFillFieldMaxHeightWith($row[22]);
				}

				if (($row[1] == "Gallery") and isset($row[23]) and !empty($row[23]))
				{
					$this->iCheckOptionRecursive($row[23]);
				}

				// Gallery, Image, Integer, List, User, Usergroup
				if (($row[1] == "Gallery" or $row[1] == "Image" or $row[1] == "Integer" or $row[1] == "List" or $row[1] == "SQL" or $row[1] == "User" or $row[1] == "Usergroup") and isset($row[24]) and !empty($row[24]))
				{
					$this->iCheckOptionMultiple($row[24]);
				}

				// Gallery and Media
				if (($row[1] == "Gallery" or $row[1] == "Media") and isset($row[25]) and !empty($row[25]))
				{
					$this->iFillFieldDirectoryWith($row[25]);
				}
				
				// Image
				if (($row[1] == "Image") and isset($row[26]) and !empty($row[26]))
				{
					$this->iFillFieldImage_classWith($row[26]);
				}
				
				// Integer
				if (($row[1] == "Integer") and isset($row[27]) and !empty($row[27]))
				{
					$this->iFillFieldFirstWith($row[27]);
				}
				
				if (($row[1] == "Integer") and isset($row[28]) and !empty($row[28]))
				{
					$this->iFillFieldLastWith($row[28]);
				}

				if (($row[1] == "Integer") and isset($row[29]) and !empty($row[29]))
				{
					$this->iFillFieldStepWith($row[29]);
				}

				// Media
				if (($row[1] == "Media") and isset($row[30]) and !empty($row[30]))
				{
					$this->iSelectFieldPreview($row[30]);
				}
				
				if (($row[1] == "Media") and isset($row[31]) and !empty($row[31]))
				{
					$this->iCheckOptionHome($row[31]);
				}

				// SQL
				if (($row[1] == "SQL") and isset($row[32]) and !empty($row[32]))
				{
					$this->iFillFieldQueryWith($row[32]);
				}
				
				// URL
				if (($row[1] == "URL") and isset($row[33]) and !empty($row[33]))
				{
					$this->iSelectFieldSchemes($row[33]);
				}

				if (($row[1] == "URL") and isset($row[34]) and !empty($row[34]))
				{
					$this->iCheckOptionRelative($row[34]);
				}

				// URL
				if (isset($row[35]) and !empty($row[35]))
				{
					$this->iFillFieldAliasWith($row[35]);
				}

				// Last Field should use Save
				if ($index == $lastIndex)
				{
					$I->adminPage->clickToolbarButton('Save');
					$I->comment('READY');
				}
				else
				{
					$I->adminPage->clickToolbarButton('Save & New');
				}

			}
		}
	}
}
