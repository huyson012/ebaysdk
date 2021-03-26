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
 * @property string $UserID
 * @property \SONHH\eBaySDK\Trading\Types\UserIDArrayType $MotorsDealerUsers
 * @property \DateTime $EndTimeFrom
 * @property \DateTime $EndTimeTo
 * @property integer $Sort
 * @property \DateTime $StartTimeFrom
 * @property \DateTime $StartTimeTo
 * @property \SONHH\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property \SONHH\eBaySDK\Trading\Enums\GranularityLevelCodeType $GranularityLevel
 * @property \SONHH\eBaySDK\Trading\Types\SKUArrayType $SKUArray
 * @property boolean $IncludeWatchCount
 * @property boolean $AdminEndedItemsOnly
 * @property integer $CategoryID
 * @property boolean $IncludeVariations
 */
class GetSellerListRequestType extends \SONHH\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ],
        'MotorsDealerUsers' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\UserIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealerUsers'
        ],
        'EndTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTimeFrom'
        ],
        'EndTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTimeTo'
        ],
        'Sort' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'StartTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTimeFrom'
        ],
        'StartTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTimeTo'
        ],
        'Pagination' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'GranularityLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GranularityLevel'
        ],
        'SKUArray' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SKUArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKUArray'
        ],
        'IncludeWatchCount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeWatchCount'
        ],
        'AdminEndedItemsOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdminEndedItemsOnly'
        ],
        'CategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'IncludeVariations' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeVariations'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellerListRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
