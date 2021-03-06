<?php
/**
 * Definition of the UpdateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the UpdateFolderType type
 */
class EWSType_UpdateFolderType extends EWSType
{
    /**
     * FolderChanges property
     *
     * @var EWSType_NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderChanges',
                'required' => false,
                'type' => 'NonEmptyArrayOfFolderChangesType',
            ),
        );
    }
}
