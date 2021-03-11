<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\FieldGroup;
use SilverStripe\Forms\TimeField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class SiteConfigExtension extends DataExtension {

    private static $db = array(
        'Name' => 'HTMLText',
        'Street' => 'HTMLText',
        'City' => 'HTMLText',
        'Phone' => 'HTMLText',
        'CVR' => 'HTMLText',
        'Email' => 'HTMLText',
        'WorkStart' => 'Time',
        'WorkEnd' => 'Time',
        'WorkStartSat' => 'Time',
        'WorkEndSat' => 'Time',
        'Notes' => 'HTMLText',
        'GooglePlus' => 'HTMLText',
        'GoogleMap' => 'HTMLText',
        'Facebook' => 'HTMLText',
        'FacebookPagePlugin' => 'HTMLText'
    );

    private static $has_one = array(
        'Logo' => Image::class
    );

    public function updateCMSFields(FieldList $fields) 	{

        $fields->addFieldToTab(
            'Root.Info',
            $Logo = UploadField::create(
                'Logo',
                'Logo'
            )
        );
        $Logo->getValidator()->setAllowedExtensions(
            array(
                'png','jpeg','jpg','gif'
            )
        );
        $Logo->setAllowedMaxFileNumber(1);

        $fields->addFieldToTab(
            'Root.Info',
            $Name = TextField::create(
                'Name',
                'Name'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $Street = TextField::create(
                'Street',
                'Street'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $City = TextField::create(
                'City',
                'City'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $Phone = TextField::create(
                'Phone',
                'Phone'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $CVR = TextField::create(
                'CVR',
                'CVR'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $Email = TextField::create(
                'Email',
                'Email'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            HeaderField::create(
                'WorkingHoursHeader',
                'Working Hours',
                $headingLevel = 4
            )
        );



        $fields->addFieldToTab('Root.Time',
            FieldGroup::create(
                TimeField::create('WorkStart', 'Start Time'),
                TimeField::create('WorkEnd', 'End Time')
            )->setTitle('Monday - Friday')
        );

        $fields->addFieldToTab('Root.Time',
            FieldGroup::create(
                TimeField::create('WorkStartSat', 'Start Time'),
                TimeField::create('WorkEndSat', 'End Time')
            )->setTitle('Saturday')
        );





        $fields->addFieldToTab(
            'Root.Info',
            $Notes = HTMLEditorField::create(
                'Notes',
                'Notes'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $GooglePlus = TextField::create(
                'GooglePlus',
                'Google+'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $GoogleMap = TextareaField::create(
                'GoogleMap',
                'Google Map Code'
            )
        );
        $GoogleMap->setDescription(
            'Find out more how to embed Google Map Code <a href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en" target="_blank">here</a>.'
        );

        $fields->addFieldToTab(
            'Root.Info',
            $Facebook = TextField::create(
                'Facebook',
                'Facebook'
            )
        );

        $fields->addFieldToTab(
            'Root.Info',
            $FacebookPagePlugin = TextareaField::create(
                'FacebookPagePlugin',
                'Facebook Page Plugin'
            )
        );
        $FacebookPagePlugin->setDescription(
            'Find out more how to embed Facebook Page Plugin code <a href="https://developers.facebook.com/docs/plugins/page-plugin/" target="_blank">here</a>.'
        );

        return $fields;

    }

}