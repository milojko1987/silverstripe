<?php
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class UploadFile extends DataObject {

    private static $singular_name = 'Upload File';

    private static $plural_name = 'Upload File';

    private static $db = array(

        'Firstname' => 'HTMLText',
        'Lastname' => 'HTMLText',
        'Gender' => 'HTMLText',
        'Dateofbirth' => 'HTMLText'
    );

    private static $belongs_many_many = array(
    );

    private static $summary_fields = array(

        'Firstname' => 'Firstname',
        'Lastname' => 'Lastname',
        'Gender' => 'Gender',
        'Dateofbirth' => 'Dateofbirth'
    );



    public function getCMSFields() {

        $fields = parent::getCMSFields();



        $fields->addFieldToTab(
            'Root.Main',
            $Firstname = TextareaField::create(
                'Firstname',
                'Firstname'
            )
        );


        $fields->addFieldToTab(
            'Root.Main',
            $Lastname = TextareaField::create(
                'Lastname',
                'Lastname'
            )
        );

        $fields->addFieldToTab(
            'Root.Main',
            $Gender = TextareaField::create(
                'Gender',
                'Gender'
            )
        );

        $fields->addFieldToTab(
            'Root.Main',
            $Dateofbirth = TextareaField::create(
                'Dateofbirth',
                'Dateofbirth'
            )
        );


        return $fields;
    }
}