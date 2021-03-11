<?php
use SilverStripe\Admin\ModelAdmin;
class UploadFile_Admin extends ModelAdmin {

    private static $managed_models = array(
        'UploadFile'
    );

    private static $url_segment = 'uploadfile';

    private static $menu_title = 'Upload file';

    private static $menu_icon_class = 'font-icon-check-mark-circle';

}
