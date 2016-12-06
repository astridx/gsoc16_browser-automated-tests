Feature: menu
  In order to manage menus in the web
  As an owner
  I need to manage menus and menu items

  Background:
    When I Login into Joomla administrator with username "admin" and password "admin"
    And I see the administrator dashboard

  Scenario: Create a Menu
    Given There is a add menu link
    When I fill field Title for creating menu with "Title One"
    When I fill field Type for creating menu with "Tye One"
    When I fill field Description for creating menu with "Description One"
    And I save a menu
    Then I should see "Menus", "Menu successfully saved"
