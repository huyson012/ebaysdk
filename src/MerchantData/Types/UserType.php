<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\MerchantData\Types;

/**
 *
 * @property boolean $AboutMePage
 * @property string $EIASToken
 * @property string $Email
 * @property integer $FeedbackScore
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property double $PositiveFeedbackPercent
 * @property boolean $FeedbackPrivate
 * @property \SONHH\eBaySDK\MerchantData\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property boolean $IDVerified
 * @property boolean $eBayGoodStanding
 * @property boolean $NewUser
 * @property \SONHH\eBaySDK\MerchantData\Types\AddressType $RegistrationAddress
 * @property \DateTime $RegistrationDate
 * @property \SONHH\eBaySDK\MerchantData\Enums\SiteCodeType $Site
 * @property \SONHH\eBaySDK\MerchantData\Enums\UserStatusCodeType $Status
 * @property string $UserID
 * @property boolean $UserIDChanged
 * @property \DateTime $UserIDLastChanged
 * @property \SONHH\eBaySDK\MerchantData\Enums\VATStatusCodeType $VATStatus
 * @property \SONHH\eBaySDK\MerchantData\Types\BuyerType $BuyerInfo
 * @property \SONHH\eBaySDK\MerchantData\Types\SellerType $SellerInfo
 * @property \SONHH\eBaySDK\MerchantData\Enums\BusinessRoleType $BusinessRole
 * @property \SONHH\eBaySDK\MerchantData\Enums\PayPalAccountLevelCodeType $PayPalAccountLevel
 * @property \SONHH\eBaySDK\MerchantData\Enums\PayPalAccountTypeCodeType $PayPalAccountType
 * @property \SONHH\eBaySDK\MerchantData\Enums\PayPalAccountStatusCodeType $PayPalAccountStatus
 * @property \SONHH\eBaySDK\MerchantData\Enums\EBaySubscriptionTypeCodeType[] $UserSubscription
 * @property string[] $SkypeID
 * @property boolean $eBayWikiReadOnly
 * @property integer $TUVLevel
 * @property string $VATID
 * @property boolean $MotorsDealer
 * @property \SONHH\eBaySDK\MerchantData\Types\BiddingSummaryType $BiddingSummary
 * @property boolean $UserAnonymized
 * @property integer $UniqueNeutralFeedbackCount
 * @property boolean $EnterpriseSeller
 * @property string $BillingEmail
 * @property boolean $QualifiesForSelling
 * @property string $StaticAlias
 * @property \SONHH\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property string $UserFirstName
 * @property string $UserLastName
 */
class UserType extends \SONHH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AboutMePage' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AboutMePage'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'FeedbackScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ],
        'UniqueNegativeFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ],
        'UniquePositiveFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        ],
        'PositiveFeedbackPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ],
        'FeedbackPrivate' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackPrivate'
        ],
        'FeedbackRatingStar' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRatingStar'
        ],
        'IDVerified' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IDVerified'
        ],
        'eBayGoodStanding' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayGoodStanding'
        ],
        'NewUser' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ],
        'RegistrationAddress' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegistrationAddress'
        ],
        'RegistrationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ],
        'Site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ],
        'UserIDChanged' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserIDChanged'
        ],
        'UserIDLastChanged' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserIDLastChanged'
        ],
        'VATStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATStatus'
        ],
        'BuyerInfo' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\BuyerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerInfo'
        ],
        'SellerInfo' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\SellerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerInfo'
        ],
        'BusinessRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessRole'
        ],
        'PayPalAccountLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountLevel'
        ],
        'PayPalAccountType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountType'
        ],
        'PayPalAccountStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountStatus'
        ],
        'UserSubscription' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UserSubscription'
        ],
        'SkypeID' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ],
        'eBayWikiReadOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayWikiReadOnly'
        ],
        'TUVLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TUVLevel'
        ],
        'VATID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATID'
        ],
        'MotorsDealer' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealer'
        ],
        'BiddingSummary' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\BiddingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BiddingSummary'
        ],
        'UserAnonymized' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ],
        'UniqueNeutralFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ],
        'EnterpriseSeller' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EnterpriseSeller'
        ],
        'BillingEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BillingEmail'
        ],
        'QualifiesForSelling' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForSelling'
        ],
        'StaticAlias' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StaticAlias'
        ],
        'ShippingAddress' => [
            'type' => 'SONHH\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'UserFirstName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserFirstName'
        ],
        'UserLastName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserLastName'
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
