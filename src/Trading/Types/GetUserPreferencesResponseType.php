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
 * @property \SONHH\eBaySDK\Trading\Types\BidderNoticePreferencesType $BidderNoticePreferences
 * @property \SONHH\eBaySDK\Trading\Types\CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property \SONHH\eBaySDK\Trading\Types\SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property \SONHH\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property \SONHH\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property boolean $EmailShipmentTrackingNumberPreference
 * @property boolean $RequiredShipPhoneNumberPreference
 * @property \SONHH\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property \SONHH\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
 * @property \SONHH\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property \SONHH\eBaySDK\Trading\Types\SellerProfilePreferencesType $SellerProfilePreferences
 * @property \SONHH\eBaySDK\Trading\Types\SellerReturnPreferencesType $SellerReturnPreferences
 * @property boolean $OfferGlobalShippingProgramPreference
 * @property \SONHH\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property boolean $GlobalShippingProgramListingPreference
 * @property boolean $OverrideGSPServiceWithIntlServicePreference
 * @property boolean $PickupDropoffSellerPreference
 * @property boolean $OutOfStockControlPreference
 * @property \SONHH\eBaySDK\Trading\Types\EBayPLUSPreferenceType[] $eBayPLUSPreference
 */
class GetUserPreferencesResponseType extends \SONHH\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidderNoticePreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\BidderNoticePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderNoticePreferences'
        ],
        'CombinedPaymentPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\CombinedPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CombinedPaymentPreferences'
        ],
        'SellerPaymentPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellerPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentPreferences'
        ],
        'SellerFavoriteItemPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ],
        'EndOfAuctionEmailPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ],
        'EmailShipmentTrackingNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ],
        'RequiredShipPhoneNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ],
        'UnpaidItemAssistancePreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
        ],
        'SellerExcludeShipToLocationPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationPreferences'
        ],
        'PurchaseReminderEmailPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ],
        'SellerProfilePreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellerProfilePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProfilePreferences'
        ],
        'SellerReturnPreferences' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\SellerReturnPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerReturnPreferences'
        ],
        'OfferGlobalShippingProgramPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OfferGlobalShippingProgramPreference'
        ],
        'DispatchCutoffTimePreference' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ],
        'GlobalShippingProgramListingPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ],
        'OverrideGSPServiceWithIntlServicePreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OverrideGSPServiceWithIntlServicePreference'
        ],
        'PickupDropoffSellerPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDropoffSellerPreference'
        ],
        'OutOfStockControlPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OutOfStockControlPreference'
        ],
        'eBayPLUSPreference' => [
            'type' => 'SONHH\eBaySDK\Trading\Types\EBayPLUSPreferenceType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eBayPLUSPreference'
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
