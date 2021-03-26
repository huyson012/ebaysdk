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
 * @property boolean $ShipToRegistrationCountry
 * @property boolean $ZeroFeedbackScore
 * @property integer $MinimumFeedbackScore
 * @property \SONHH\eBaySDK\Trading\Types\MaximumItemRequirementsType $MaximumItemRequirements
 * @property boolean $LinkedPayPalAccount
 * @property \SONHH\eBaySDK\Trading\Types\VerifiedUserRequirementsType $VerifiedUserRequirements
 * @property \SONHH\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo
 * @property \SONHH\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsType $MaximumBuyerPolicyViolations
 */
class BuyerRequirementDetailsType extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShipToRegistrationCountry' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ],
        'ZeroFeedbackScore' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ZeroFeedbackScore'
        ],
        'MinimumFeedbackScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ],
        'MaximumItemRequirements' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\MaximumItemRequirementsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ],
        'LinkedPayPalAccount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ],
        'VerifiedUserRequirements' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\VerifiedUserRequirementsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VerifiedUserRequirements'
        ],
        'MaximumUnpaidItemStrikesInfo' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ],
        'MaximumBuyerPolicyViolations' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
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
