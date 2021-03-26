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
 * @property string $StartingDisputeID
 * @property string $EndingDisputeID
 * @property \SONHH\eBaySDK\Trading\Types\DisputeArrayType $DisputeArray
 * @property integer $ItemsPerPage
 * @property integer $PageNumber
 * @property \SONHH\eBaySDK\Trading\Types\DisputeFilterCountType[] $DisputeFilterCount
 * @property \SONHH\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 */
class GetUserDisputesResponseType extends \SONHH\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'StartingDisputeID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartingDisputeID'
        ],
        'EndingDisputeID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndingDisputeID'
        ],
        'DisputeArray' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\DisputeArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisputeArray'
        ],
        'ItemsPerPage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemsPerPage'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'DisputeFilterCount' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\DisputeFilterCountType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DisputeFilterCount'
        ],
        'PaginationResult' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
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
