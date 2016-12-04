Feature: menu
  In order to manage menus in the web
  As an owner
  I need to manage menus and menu items

  Background:
    When I Login into Joomla administrator with username "admin" and password "admin"
    And I see the administrator dashboard

  Scenario: Create a Menu
    Given There is a add menu link
    When I fill fields for creating menu
      |     Title        |
      |     Type         |
      |     Description  |
    And I save a menu
    Then I should see "Menus", "Menu successfully saved"
