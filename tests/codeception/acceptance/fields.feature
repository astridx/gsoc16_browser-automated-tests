Feature: Banner
  In order to manage Banner article in the web
  I need to create modify trash archived Check-In And publish and Unpublish Banner

  Background: 
    When I Login into Joomla administrator
    And I see the administrator dashboard

  Scenario: Create a Field Group
    Given There is a add field group link
    And I click toolbar button "New"
    And I fill field title with "NewFieldGroup"
    And I click toolbar button "Save"

  Scenario: Create many Field Groups
    Given There is a add field group link
    When I fill mandatory fields for creating Field Group
      |Title          |
      |NewFieldGroup_1|
      |NewFieldGroup_2|

  Scenario: Create new categories
    Given There is an article category link
    When I fill mandatory fields for creating Category
      |     Title     |
      |   Category_FieldGroupTest_1  |
      |   Category_FieldGroupTest_2  |


  Scenario: Create many Fields
    Given There is a add field link
    When I fill fields for creating Field
      |Title0           |Type1     |Label2          |Description3          |Required4|Default5                               |State6   |FieldGroup7    |Categorie8               |Access9|Language10     |Note11                         |Format12|Options13              |Buttons14|Hide15            |Width16|Height17|Rows18|Cols19|Thumbnailwidth20|Maxwidth21|Maxheight22|Rekursive23|Multiple24|Directory25      |Image_class26|First27|Last28|Step29|Preview30|Home31|Query32                                          |Schemes33|Relative34|Alias35|
      |CalendarField_1  |Calendar  |CalendarLabel_1 |CalendarDescription_1 |Yes      |2017-01-01                             |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Calendarfield Note |%Y-%m-%d|                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |CheckboxField_1  |Checkboxes|CheckboxLabel_1 |CheckboxDescription_1 |Yes      |Option2                                |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Checkboxfield Note |        |Option1,Option2,Option3|         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |ColourField_1    |Colour    |ColourLabel_1   |ColourDescription_1   |Yes      |#ff0000                                 |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Colorfield Note    |        |                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |EditorField_1    |Editor    |EditorLabel_1   |EditorDescription_1   |Yes      |My default Text in the editor_1 field  |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Editorfield Note   |        |                       |Yes      |pagebreak,readmore|50%    |100px   |20    |20    |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |EmailField_1     |Email     |EmailLabel_1    |EmailDescription_1    |Yes      |info@example.org                       |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Emailfield Note    |        |                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |GalleryField_1   |Gallery   |GalleryLabel_1  |GalleryDescription_1  |Yes      |parks                                  |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Galleryfield Note  |        |                       |         |                  |       |        |      |      |50              |200       |200        |Yes        |Yes       |images/sampledata|             |       |      |      |         |      |                                                 |         |          ||
      |ImageField_1     |Image     |ImageLabel_1    |ImageDescription_1    |Yes      |joomla_black.png                       |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Imagefield Note    |        |                       |         |                  |       |        |      |      |                |          |           |           |Yes       |                 |my_imageclass|       |      |      |         |      |                                                 |         |          ||
      |IntegerField_1   |Integer   |IntegerLabel_1  |IntegerDescription_1  |Yes      |15                                     |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Integerfield Note  |        |                       |         |                  |       |        |      |      |                |          |           |           |Yes       |                 |             |10     |20    |1     |         |      |                                                 |         |          ||
      |ListField_1      |List      |ListLabel_1     |ListDescription_1     |Yes      |Option2                                |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Listfield Note     |        |Option1,Option2,Option3|         |                  |       |        |      |      |                |          |           |           |Yes       |                 |             |       |      |      |         |      |                                                 |         |          ||
      |MediaField_1     |Media     |MediaLabel_1    |MediaDescription_1    |Yes      |images/joomla_black.png                |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Mediafield Note    |        |                       |         |                  |       |        |      |      |                |          |           |           |          |images/sampledata|             |       |      |      |Inline   |Yes   |                                                 |         |          ||
      |RadioField_1     |Radio     |RadioLabel_1    |RadioDescription_1    |Yes      |Option2                                |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Radiofield Note    |        |Option1,Option2,Option3|         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |SQLField_1       |SQL       |SQLLabel_1      |SQLDescription_1      |Yes      |2                                      |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal SQLfield Note      |        |                       |         |                  |       |        |      |      |                |          |           |           |Yes       |                 |             |       |      |      |         |      |select id as value, title as text from #__modules|         |          ||
      |TelephoneField_1 |Telephone |TelephoneLabel_1|TelephoneDescription_1|Yes      |01234 567                              |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Telephonfield Note |        |                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |TextField_1      |Text      |TextLabel_1     |TextDescription_1     |Yes      |My default Text in the text_1 field    |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Textfield Note     |        |                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |TextareaField_1  |Textarea  |TextareaLabel_1 |TextareaDescription_1 |Yes      |My default Text in the textarea_1 field|Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Textareafield Note |        |                       |         |                  |       |        |20    |20    |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |TimezoneField_1  |Timezone  |TimezoneLabel_1 |TimezoneDescription_1 |Yes      |Europe/Amsterdam                       |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Timezonefield Note |        |                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |         |          ||
      |URLField_1       |URL       |URLLabel_1      |URLDescription_1      |Yes      |www.example.org                        |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal URLfield Note      |        |                       |         |                  |       |        |      |      |                |          |           |           |          |                 |             |       |      |      |         |      |                                                 |HTTP     |Yes       ||
      |UserField_1      |User      |UserLabel_1     |UserDescription_1     |Yes      |                                       |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Userfield Note     |        |                       |         |                  |       |        |      |      |                |          |           |           |Yes       |                 |             |       |      |      |         |      |                                                 |         |          ||
      |UsergroupField_1 |Usergroup |UsergroupLabel_1|UsergroupDescription_1|Yes      |2                                      |Published|- NewFieldGroup|Category_FieldGroupTest_1|Public |English (en-GB)|My personal Usergroupfield Note|        |                       |         |                  |       |        |      |      |                |          |           |           |Yes       |                 |             |       |      |      |         |      |                                                 |         |          ||

  Scenario: Create Fields
    ###
    ### CALENDAR
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewCalendarField"
    ##Alias
    And I fill field alias with "newcalendarfield"
    ##Type
    And I select field type "Calendar"
    ##Label
    And I fill field label  with "Label for NewCalendarField"
    ##Description
    And I fill field description  with "Decription for NewCalendarField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default #invalide default breaks the article view
    And I fill field default_value  with "2017-01-01" 
    ##Format
    And I fill field format  with "%Y-%m-%d"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"



    
    ###
    ### CHECKBOXES
    ###
    Given There is a add field link
    And I click toolbar button "New"
    And I fill field title with "NewCheckboxesField"
    ##Alias
    And I fill field alias with "newcheckboxfield"
    And I fill field label  with "Label for NewCheckboxesField"
    And I fill field description  with "Decription for NewCheckboxesField"
    And I select field type "Checkboxes"
    And I fill field default_value  with "Value_2"
    And I check option required "Yes"
    And I check option required "No"
    And I fill field options
      |   Name  | Value |
      |   Name_1  | Value_1  |
      |   Name_2  | Value_2  |
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"




    ###
    ### COLOUR
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewColourField"
    ##Alias
    And I fill field alias with "newcolourfield"
    ##Type
    And I select field type "Colour"
    ##Label
    And I fill field label  with "Label for NewColourField"
    ##Description
    And I fill field description  with "Decription for NewColourField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "#ff0000"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"




    ###
    ### EDITOR
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewEditorField"
    ##Alias
    And I fill field alias with "neweditorfield"
    ##Type
    And I select field type "Editor"
    ##Label
    And I fill field label  with "Label for NewEditorField"
    ##Description
    And I fill field description  with "Decription for NewEditorField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "My default Text in the editor field"
    ##Buttons
    And I check option buttons "Yes"
    And I check option buttons "No"
    ##Hide
    And I fill field hide  with "pagebreak,readmore"
    ##Width
    And I fill field width  with "50%"
    ##Height
    And I fill field height  with "100px"
    ##Rows
    And I fill field rows  with "20"
    ##Cols
    And I fill field cols  with "20"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"






    ###
    ### EMAIL
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewEmailField"
    ##Alias
    And I fill field alias with "newemailfield"
    ##Type
    And I select field type "Email"
    ##Label
    And I fill field label  with "Label for NewEmailField"
    ##Description
    And I fill field description  with "Decription for NewEmailField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "peter@example.org"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"



    ###
    ### GALLERY
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewGalleryField"
    ##Alias
    And I fill field alias with "newgalleryfield"
    ##Type
    And I select field type "Gallery"
    ##Label
    And I fill field label  with "Label for NewGalleryField"
    ##Description
    And I fill field description  with "Decription for NewGalleryField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "parks"
    ##ThumbnailWidth
    And I fill field ThumbnailWidth  with "50"
    ##MaxWidth
    And I fill field MaxWidth  with "200"
    ##MaxHeight
    And I fill field MaxHeight  with "200"
    ##Recursiv
    And I check option required "Yes"
    And I check option required "No"
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##Directory
    And I fill field directory  with "images/sampledata"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"







    ###
    ### Image
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewImageField"
    ##Alias
    And I fill field alias with "newimagefield"
    ##Type
    And I select field type "Image"
    ##Label
    And I fill field label  with "Label for NewImageField"
    ##Description
    And I fill field description  with "Decription for NewImageField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "joomla_black.png"
    ##Directory
    And I select field directory  with "sampledata"
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##Image_class
    And I fill field image_class  with "my_imageclass_for_testing_imagefield"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"





    ###
    ### Integer
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewIntegerField"
    ##Alias
    And I fill field alias with "newintegerfield"
    ##Type
    And I select field type "Integer"
    ##Label
    And I fill field label  with "Label for NewIntegerField"
    ##Description
    And I fill field description  with "Decription for NewIntegerField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "15"
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##First
    And I fill field first  with "10"
    ##Last
    And I fill field last  with "50"
    ##Step
    And I fill field step  with "2"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"




    ###
    ### List
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewListField"
    ##Alias
    And I fill field alias with "newlistfield"
    ##Label
    And I fill field label  with "Label for NewListField"
    ##Description
    And I fill field description  with "Decription for NewListField"
    ##Type
    And I select field type "List"
    ##Default
    And I fill field default_value  with "Value_2"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    And I fill field options
      |   Name  | Value |
      |   Name_1  | Value_1  |
      |   Name_2  | Value_2  |
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"









    ###
    ### MEDIA
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewMediaField"
    ##Alias
    And I fill field alias with "newmediafield"
    ##Type
    And I select field type "Media"
    ##Label
    And I fill field label  with "Label for NewMediaField"
    ##Description
    And I fill field description  with "Decription for NewMediaField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "images/joomla_black.png"
    ##Directory
    And I fill field directory  with "images/sampledata"
    ##Preview
    And I select field preview "Tooltip"
    And I select field preview "Inline"
    And I select field preview "No"
    ##Home
    And I check option home "No"
    And I check option home "Yes"
    ##Image_class
    And I fill field image_class  with "my_imageclass_for_testing_imagefield"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"






    ###
    ### RADIO
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewRadioField"
    ##Alias
    And I fill field alias with "newradiofield"
    ##Label
    And I fill field label  with "Label for NewRadioField"
    ##Description
    And I fill field description  with "Decription for NewRadioField"
    ##Type
    And I select field type "Radio"
    ##Default
    And I fill field default_value  with "Value_2"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    And I fill field options
      |   Name  | Value |
      |   Name_1  | Value_1  |
      |   Name_2  | Value_2  |
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"









    ###
    ### SQL
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewSQLField"
    ##Alias
    And I fill field alias with "newsqlfield"
    ##Type
    And I select field type "SQL"
    ##Label
    And I fill field label  with "Label for NewSQLField"
    ##Description
    And I fill field description  with "Decription for NewSQLField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default #You have to use the id as default!!
    And I fill field default_value  with "2" 
    ##Query
    And I fill field query  with "select id as value, title as text from #__modules"
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"






    ###
    ### TELEPHONE
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewTelephoneField"
    ##Alias
    And I fill field alias with "newtelephonefield"
    ##Type
    And I select field type "Telephone"
    ##Label
    And I fill field label  with "Label for NewTelephoneField"
    ##Description
    And I fill field description  with "Decription for NewTelephoneField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "01245 54875"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"






    ###
    ### TEXT
    ###

    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewTextField"
    ##Alias
    And I fill field alias with "newtextfield"
    ##Type
    And I select field type "Text"
    ##Label
    And I fill field label  with "Label for NewTextField"
    ##Description
    And I fill field description  with "Decription for NewTextField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "My default text value"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"






    ###
    ### TEXTAREA
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewTextareaField"
    ##Alias
    And I fill field alias with "newtextareafield"
    ##Type
    And I select field type "Textarea"
    ##Label
    And I fill field label  with "Label for NewTextareaField"
    ##Description
    And I fill field description  with "Decription for NewTextareaField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "My default textarea value"
    ##Rows
    And I fill field rows  with "20"
    ##Cols
    And I fill field cols  with "20"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"






    ###
    ### TIMEZONE
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewTimezoneField"
    ##Alias
    And I fill field alias with "newtimezonefield"
    ##Type
    And I select field type "Timezone"
    ##Label
    And I fill field label  with "Label for NewTimezoneField"
    ##Description
    And I fill field description  with "Decription for NewTimezoneField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "Europe/Amsterdam"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"







    ###
    ### URL
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewURLField"
    ##Alias
    And I fill field alias with "newurlfield"
    ##Type
    And I select field type "URL"
    ##Label
    And I fill field label  with "Label for NewURLField"
    ##Description
    And I fill field description  with "Decription for NewURLField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "www.example.org"
    ##Schemes
    And I select field schemes "FILE"
    And I select field schemes "MAILTO"
    #And I select field schemes "HTTP"
    #And I select field schemes "FTP"
    #And I select field schemes "FTPS"
    #And I select field schemes "URL"
    And I unselect field schemes "HTTPS"
    And I unselect field schemes "MAILTO"
    ##Relative
    And I check option relative "Yes"
    And I check option relative "No"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"





    ###
    ### USER
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewUserField"
    ##Alias
    And I fill field alias with "newuserfield"
    ##Type
    And I select field type "User"
    ##Label
    And I fill field label  with "Label for NewUserField"
    ##Description
    And I fill field description  with "Decription for NewUserField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default - You need to know the id of the user
    And I fill field default_value  with ""
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"




    ###
    ### USERGROUP
    ###
    Given There is a add field link
    And I click toolbar button "New"
    ##Title
    And I fill field title with "NewUsergroupField"
    ##Alias
    And I fill field alias with "newusergroupfield"
    ##Type
    And I select field type "Usergroup"
    ##Label
    And I fill field label  with "Label for NewUsergroupField"
    ##Description
    And I fill field description  with "Decription for NewUsergroupField"
    ##Required
    And I check option required "Yes"
    And I check option required "No"
    ##Default
    And I fill field default_value  with "2"  
    ##Multiple
    And I check option multiple "Yes"
    And I check option multiple "No"
    ##State
    And I select field state "Published"
    #And I select field state "Unpublished"
    #And I select field state "Archived"
    #And I select field state "Trashed"
    ##FieldGroup
    And I select field group "- NewFieldGroup"
    ##Categorie
    And I select field cat "Category_FieldGroupTest_2"
    And I unselect field cat "All"
    ##Access
    And I select field access "Public"
    #And I select field access "Registered"
    #And I select field access "Special"
    #And I select field access "Super Users"
    ##Language
    And I select field language "English (en-GB)"
    ##Note
    And I fill field note with "My personal note"
    And I click toolbar button "Save"
