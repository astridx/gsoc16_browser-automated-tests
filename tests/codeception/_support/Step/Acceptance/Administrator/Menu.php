<?php
/**
 * @package     Joomla.Test
 * @subpackage  AcceptanceTester.Step
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Step\Acceptance\Administrator;

use Page\Acceptance\Administrator\MenuManagerPage;

/**
 * Acceptance Step object class contains suits for Menu Manager.
 *
 * @package  Step\Acceptance\Administrator
 *
 * @since    __DEPLOY_VERSION__
 */
class Menu extends Admin
{
	/**
	 * Method to go to menu management
	 *
	 * @Given There is a add menu link
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function thereIsAAddMenuLink()
	{
		$I = $this;

		$I->amOnPage(MenuManagerPage::$url_menumanager);
		$I->adminPage->clickToolbarButton('New');
		$I->click('Menu Details');
	}

        /**
	 * Method to fill a create new menu form - fill the field title
	 *
         * @When I fill field Title for creating menu with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
   	 */
        public function iFillFieldTitleForCreatingMenuWith($title)
        {
		$I = $this;

		$I->fillField(MenuManagerPage::$titleField, $title);
        }

        /**
	 * Method to fill a create new menu form - fill the field type
	 *
         * @When I fill field Type for creating menu with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
   	 */
        public function iFillFieldTypeForCreatingMenuWith($type)
        {
		$I = $this;

		$I->fillField(MenuManagerPage::$typeField, $type);
        }

        /**
	 * Method to fill a create new menu form - fill the field description
	 *
         * @When I fill field Description for creating menu with :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
   	 */
        public function iFillFieldDescriptionForCreatingMenuWith($description)
        {
		$I = $this;

		$I->fillField(MenuManagerPage::$descriptionField, $description);
        }
         
	/**
	 * Method to save a menu
	 *
	 * @When I save a menu
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iSaveAMenu()
	{
		$I = $this;

		$I->adminPage->clickToolbarButton('Save & Close');
	}

	/**
	 * Method to see a text
	 *
	 * @param   string  $title    The message text
	 * @param   string  $message  The message text
	 *
	 * @Then I should see :arg1, :arg2 
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iShouldSee($title, $message)
	{
		$I = $this;

		$I->menuManagerPage->seeSystemMessage($title, $message);
	}
}
