<?php

namespace {

    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;

    class HomePage extends Page
    {
        private static $db = [];

        private static $has_one = [];


        public function getCMSFields()
        {
            $fields = parent::getCMSFields();


            $fields->addFieldToTab('Root.Main',
                TextareaField::create('Content', 'Info Content'),
                'Metadata'
            );

            return $fields;
        }
    }
}
