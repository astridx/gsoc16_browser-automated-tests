Feature: performance
  In order to manage performance of the website
  As an owner
  I need to call special tasks

  Scenario: Open Page
	Given I am on Page "/index.php/category-10-cf"
    When I Call Page "/index.php/category-10-cf" "10" times and wait "0" seconds in between
	Then average load time should bee less than "0.4" seconds