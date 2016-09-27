Feature: menuitempermissions
  In order to manage menuitempermissions in the web
  As a administrator
  I need to create menuitems with permission for the basic access levels public, guest, registered, special, super user and for new created access levels

  Background:
    When I Login into Joomla administrator with username "admin" and password "admin"
    And I see the administrator dashboard

  Scenario: Create a menuitem with access level public
    Given there is a add menuitem link
	And there is a user 

  Scenario: Create a menuitem with access level public
    Given there is a add menuitem link

  Scenario: Create a menuitem with access level guest
    Given there is a add menuitem link

  Scenario: Create a menuitem with access level registered
    Given there is a add menuitem link

  Scenario: Create a menuitem with access level special
    Given there is a add menuitem link

  Scenario: Create a menuitem with access level super user
    Given there is a add menuitem link

  Scenario: Create a menuitem for a new created access level
    Given there is a add menuitem link
	And there is a custom access level named custom