<?php
/**
 * Definition of the MimeContentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MimeContentType type
 */
class EWSType_MimeContentType extends EWSType
{
    /**
     * A text value that represents a base64Binary MIME stream.
     *
     * @var string
     */
    public $_;

    /**
     * The International Standards Organization (ISO) name of the character set
     * used in the MIME message.
     *
     * @var string
     */
    public $CharacterSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => '_',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'CharacterSet',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
