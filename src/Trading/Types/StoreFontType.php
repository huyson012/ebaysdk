<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\Trading\Types;

/**
 *
 * @property \SONHH\eBaySDK\Trading\Enums\StoreFontFaceCodeType $NameFace
 * @property \SONHH\eBaySDK\Trading\Enums\StoreFontSizeCodeType $NameSize
 * @property string $NameColor
 * @property \SONHH\eBaySDK\Trading\Enums\StoreFontFaceCodeType $TitleFace
 * @property \SONHH\eBaySDK\Trading\Enums\StoreFontSizeCodeType $TitleSize
 * @property string $TitleColor
 * @property \SONHH\eBaySDK\Trading\Enums\StoreFontFaceCodeType $DescFace
 * @property \SONHH\eBaySDK\Trading\Enums\StoreFontSizeCodeType $DescSize
 * @property string $DescColor
 */
class StoreFontType extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'NameFace' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NameFace'
        ],
        'NameSize' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NameSize'
        ],
        'NameColor' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NameColor'
        ],
        'TitleFace' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TitleFace'
        ],
        'TitleSize' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TitleSize'
        ],
        'TitleColor' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TitleColor'
        ],
        'DescFace' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DescFace'
        ],
        'DescSize' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DescSize'
        ],
        'DescColor' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DescColor'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
