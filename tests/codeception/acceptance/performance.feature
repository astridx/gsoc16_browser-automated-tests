Feature: performance
  In order to manage performance of the website
  As an owner
  I need to call special tasks

#   Background for creating test data
#	Background:
#    When I Login into Joomla administrator
#    And I see the administrator dashboard

#  Scenario: Open Page
#	Given I am on Page "/index.php/category-test-1"
#	When I Call Page "/index.php/category-test-1" "10" times and wait "1" seconds in between
#	Then average load time should bee less than "1.4" seconds
#
#  Scenario: Open Page
#	Given I am on Page "/index.php/category-test-5"
#	When I Call Page "/index.php/category-test-5" "10" times and wait "1" seconds in between
#	Then average load time should bee less than "1.4" seconds
#
#  Scenario: Open Page
#	Given I am on Page "/index.php/category-test-20"
#	When I Call Page "/index.php/category-test-20" "10" times and wait "1" seconds in between
#	Then average load time should bee less than "1.4" seconds
#
#  Scenario: Open Page
#	Given I am on Page "/index.php/category-test-1-cf"
#	When I Call Page "/index.php/category-test-1-cf" "10" times and wait "1" seconds in between
#	Then average load time should bee less than "1.4" seconds
#
#  Scenario: Open Page
#	Given I am on Page "/index.php/category-test-5-cf"
#	When I Call Page "/index.php/category-test-5-cf" "10" times and wait "1" seconds in between
#	Then average load time should bee less than "1.4" seconds
#
#  Scenario: Open Page
#	Given I am on Page "/index.php/category-test-20-cf"
#	When I Call Page "/index.php/category-test-20-cf" "10" times and wait "1" seconds in between
#	Then average load time should bee less than "1.4" seconds


  Scenario: Open Page and check memory
	Given I am on Page "/index.php/category-test-20"
	When I Call Page "/index.php/category-test-20" "10" times and wait "1" seconds in between
	Then average memory should bee less than "4" bytes




  ###
  ### Create testdata
  ###

#  Scenario: Create a Field Group
#    Given There is a add field group link
#    And I click toolbar button "New"
#    And I fill field title with "NewFieldGroup"
#    And I click toolbar button "Save"
#
#  Scenario: Create new categories
#    Given There is an article category link
#    When I fill mandatory fields for creating Category
#      | Title           |
#      | Category_Test_1 |
#      | Category_Test_5 |
#      | Category_Test_20 |
#      | Category_Test_1_cf |
#      | Category_Test_5_cf |
#      | Category_Test_20_cf |
#  Scenario: Create many Fields
#    Given There is a add field link
#    When I fill fields for creating Field
#      | Title0               | Type1                       | Label2               | Description3               | Required4 | Default5                                | State6    | FieldGroup7   | Categorie8                | Access9 | Language10      | Note11                              | ShowTime12 | Options13               | Buttons14 | Hide15             | Width16 | Height17 | Rows18 | Cols19 | Thumbnailwidth20 | Maxwidth21 | Maxheight22 | Recursive23 | Multiple24 | Directory25       | Image_class26 | First27 | Last28 | Step29 | Preview30 | Home31 | Query32                                           | Schemes33 | Relative34 | Placeholder35 | Filter36 | leer37 | RenderClass38 | EditClass39 | Disabled40 | Readonly41 | Showon42 | AutomaticDisplay43 |
#      | CalendarField_1      | Calendar (calendar)         | CalendarLabel_1      | CalendarDescription_1      | Yes       | 2017-01-01                              | Published | NewFieldGroup | Category_Test_1_cf | Public  | English (en-GB) | My personal Calendarfield Note      | Yes        |                         |           |                    |         |          |        |        |                  |            |             |             |            |                   |               |         |        |        |           |        |                                                   |           |            | Placeholder   |          |        | renderclass   | editclassc  | No         | No         | Both     | After Title        |
#      | CalendarField_5      | Calendar (calendar)         | CalendarLabel_1      | CalendarDescription_1      | Yes       | 2017-01-01                              | Published | NewFieldGroup | Category_Test_5_cf | Public  | English (en-GB) | My personal Calendarfield Note      | Yes        |                         |           |                    |         |          |        |        |                  |            |             |             |            |                   |               |         |        |        |           |        |                                                   |           |            | Placeholder   |          |        | renderclass   | editclassc  | No         | No         | Both     | After Title        |
#      | CalendarField_20     | Calendar (calendar)         | CalendarLabel_1      | CalendarDescription_1      | Yes       | 2017-01-01                              | Published | NewFieldGroup | Category_Test_20_cf | Public  | English (en-GB) | My personal Calendarfield Note      | Yes        |                         |           |                    |         |          |        |        |                  |            |             |             |            |                   |               |         |        |        |           |        |                                                   |           |            | Placeholder   |          |        | renderclass   | editclassc  | No         | No         | Both     | After Title        |
#  Scenario: Create many articles
#    Given There is a add content link
#    When I fill fields for creating an Article
#      | Title0         | Content1            | Category|
#      | Article_1_1    | Text of the article | Category_Test_1 |
#      | Article_1_1    | Text of the article | Category_Test_1_cf |
#      | Article_1_5    | Text of the article | Category_Test_5 |
#      | Article_2_5    | Text of the article | Category_Test_5 |
#      | Article_3_5    | Text of the article | Category_Test_5 |
#      | Article_4_5    | Text of the article | Category_Test_5 |
#      | Article_5_5    | Text of the article | Category_Test_5 |
#      | Article_1_5    | Text of the article | Category_Test_5_cf |
#      | Article_2_5    | Text of the article | Category_Test_5_cf |
#      | Article_3_5    | Text of the article | Category_Test_5_cf |
#      | Article_4_5    | Text of the article | Category_Test_5_cf |
#      | Article_5_5    | Text of the article | Category_Test_5_cf |
#      | Article_1_20    | Text of the article | Category_Test_20 |
#      | Article_2_20    | Text of the article | Category_Test_20 |
#      | Article_3_20    | Text of the article | Category_Test_20 |
#      | Article_4_20    | Text of the article | Category_Test_20 |
#      | Article_5_20    | Text of the article | Category_Test_20 |
#      | Article_6_20    | Text of the article | Category_Test_20 |
#      | Article_7_20    | Text of the article | Category_Test_20 |
#      | Article_8_20    | Text of the article | Category_Test_20 |
#      | Article_9_20    | Text of the article | Category_Test_20 |
#      | Article_10_20    | Text of the article | Category_Test_20 |
#      | Article_11_20    | Text of the article | Category_Test_20 |
#      | Article_12_20    | Text of the article | Category_Test_20 |
#      | Article_13_20    | Text of the article | Category_Test_20 |
#      | Article_14_20    | Text of the article | Category_Test_20 |
#      | Article_15_20    | Text of the article | Category_Test_20 |
#      | Article_16_20    | Text of the article | Category_Test_20 |
#      | Article_17_20    | Text of the article | Category_Test_20 |
#      | Article_18_20    | Text of the article | Category_Test_20 |
#      | Article_19_20    | Text of the article | Category_Test_20 |
#      | Article_20_20    | Text of the article | Category_Test_20 |
#      | Article_1_20    | Text of the article | Category_Test_20_cf |
#      | Article_2_20    | Text of the article | Category_Test_20_cf |
#      | Article_3_20    | Text of the article | Category_Test_20_cf |
#      | Article_4_20    | Text of the article | Category_Test_20_cf |
#      | Article_5_20    | Text of the article | Category_Test_20_cf |
#      | Article_6_20    | Text of the article | Category_Test_20_cf |
#      | Article_7_20    | Text of the article | Category_Test_20_cf |
#      | Article_8_20    | Text of the article | Category_Test_20_cf |
#      | Article_9_20    | Text of the article | Category_Test_20_cf |
#      | Article_10_20    | Text of the article | Category_Test_20_cf |
#      | Article_11_20    | Text of the article | Category_Test_20_cf |
#      | Article_12_20    | Text of the article | Category_Test_20_cf |
#      | Article_13_20    | Text of the article | Category_Test_20_cf |
#      | Article_14_20    | Text of the article | Category_Test_20_cf |
#      | Article_15_20    | Text of the article | Category_Test_20_cf |
#      | Article_16_20    | Text of the article | Category_Test_20_cf |
#      | Article_17_20    | Text of the article | Category_Test_20_cf |
#      | Article_18_20    | Text of the article | Category_Test_20_cf |
#      | Article_19_20    | Text of the article | Category_Test_20_cf |
#      | Article_20_20    | Text of the article | Category_Test_20_cf |
