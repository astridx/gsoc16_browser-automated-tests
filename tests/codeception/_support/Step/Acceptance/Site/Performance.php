<?php

/**
 * @package     Joomla.Test
 * @subpackage  Performance.Step
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Step\Acceptance\Site;

/**
 * Acceptance Step object class contains suits for User frontend views.
 *
 * @package  Step\Acceptance\Administrator
 *
 * @since    __DEPLOY_VERSION__
 */
class Performance extends \AcceptanceTester
	{

	/**
	 * Average loadtime in seconds
	 *
	 * @var     String
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	protected $loadtime = 0;

	/**
	 * Average memory_usage in bytes
	 *
	 * @var     String
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	protected $memory_usage = 0;

	/**
	 * Method to make sure that I am on a special site
	 *
	 * @param   string  $page  The page
	 *
	 * @Given I am on Page :arg1
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iAmOnPage($page)
	{
		$I = $this;

		$I->amOnPage($page);
	}

	/**
	 * Method to call a special site many times
	 *
	 * @param   string  $page   The page
	 * @param   string  $times  The repeate times
	 * @param   string  $wait   The wait time
	 *
	 * @When I Call Page :arg1 :arg2 times and wait :arg3 seconds in between
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function iCallPageTimesAndWaitSecondsInBetween($page, $times, $wait)
	{
		$I = $this;

		// TODO Check if Debug Mode is activ

		$averageSumSession = 0;
		$averageSumMemory = 0;

		for ($count = 0; $count < $times; $count++)
		{
			$I->wait($wait);
			$I->amOnPage($page);
			$I->waitForElement('#system-debug', 30);
			$I->waitForElement('#dbg_container_session', 30);

			$I->click("Session");

			// Load the text in the DOM Element #dbg_container_session
			$sessionParameters = $I->grabTextFrom('#dbg_container_session');

			// Separate the start time
			$posStartBeginn = strpos($sessionParameters, 'start') + 7;
			$startString = substr($sessionParameters, $posStartBeginn);
			$posStartEnde = strpos($startString, ',') - 1;
			$startString = trim(substr($startString, 0, $posStartEnde));

			// Separate the end time (in the variable last)
			$posLastBeginn = strpos($sessionParameters, 'last') + 7;
			$lastString = substr($sessionParameters, $posLastBeginn);
			$posLastEnde = strpos($lastString, ',') - 1;
			$lastString = trim(substr($lastString, 0, $posLastEnde));

			$averageSumSession = $averageSumSession + $lastString - $startString;

			$I->expect('SESSION - Start: ' . $lastString . ' Last: ' . $startString . ' AverageSum: ' . $averageSumSession);

			$I->click("Memory Usage");

			// Load the text in the DOM Element #dbg_container_session
			$memoryParameters = $I->grabTextFrom('#dbg_container_memory_usage');

			// Separate the end time (in the variable last)
			$posLastBeginn = strpos($memoryParameters, '(') + 1;
			$memoryString = substr($memoryParameters, $posLastBeginn);
			$posLastEnde = strpos($memoryString, 'Bytes)');
			$memoryString = str_replace(',', '',trim(substr($memoryString, 0, $posLastEnde)));

			$averageSumMemory = $averageSumMemory + $memoryString;

			$I->expect('MEMORY USAGE -: ' . $averageSumMemory . '--' . $memoryString);
		}

		$I->expect(' Average Session Loadtime: ' . $averageSumSession / $times);
		$I->expect(' Average Memory Usage: ' . $averageSumMemory / $times);
		$this->loadtime = $averageSumSession / $times;
		$this->memory_usage = $averageSumMemory / $times;
	}

	/**
	 * Method to check the load time
	 *
	 * @param   string  $requestedAverageLoadtime  The average loadtime we want to have
	 *
	 * @Then average load time should bee less than :arg1 seconds
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function averageLoadTimeShouldBeeLessThanSeconds($requestedAverageLoadtime)
	{
		$I = $this;

		if ($this->loadtime <= $requestedAverageLoadtime)
		{
			return true;
		} else
		{
			throw new \Codeception\Exception\ConditionalAssertionFailed;
		}
	}

	/**
	 * @Then average memory should bee less than :arg1 bytes
	 */
	public function averageMemoryShouldBeeLessThanBytes($arg1)
	{
		$I = $this;
	}
}
