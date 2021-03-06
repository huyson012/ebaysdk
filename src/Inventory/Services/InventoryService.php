<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace SONHH\eBaySDK\Inventory\Services;

class InventoryService extends \SONHH\eBaySDK\Inventory\Services\InventoryBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'BulkUpdatePriceAndQuantity' => [
            'method' => 'POST',
            'resource' => 'bulk_update_price_quantity',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse',
            'params' => [
            ]
        ],
        'CreateOrReplaceInventoryItem' => [
            'method' => 'PUT',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteInventoryItem' => [
            'method' => 'DELETE',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryItem' => [
            'method' => 'GET',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetInventoryItemRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryItems' => [
            'method' => 'GET',
            'resource' => 'inventory_item',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateOrReplaceInventoryItemGroup' => [
            'method' => 'PUT',
            'resource' => 'inventory_item_group/{inventoryItemGroupKey}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse',
            'params' => [
                'inventoryItemGroupKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteInventoryItemGroup' => [
            'method' => 'DELETE',
            'resource' => 'inventory_item_group/{inventoryItemGroupKey}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestResponse',
            'params' => [
                'inventoryItemGroupKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryItemGroup' => [
            'method' => 'GET',
            'resource' => 'inventory_item_group/{inventoryItemGroupKey}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetInventoryItemGroupRestResponse',
            'params' => [
                'inventoryItemGroupKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkMigrateListings' => [
            'method' => 'POST',
            'resource' => 'bulk_migrate_listing',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse',
            'params' => [
            ]
        ],
        'CreateInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteInventoryLocation' => [
            'method' => 'DELETE',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\DeleteInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DisableInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}/disable',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\DisableInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'EnableInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}/enable',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\EnableInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryLocation' => [
            'method' => 'GET',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryLocations' => [
            'method' => 'GET',
            'resource' => 'location',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'UpdateInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}/update_location_details',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\UpdateInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateOffer' => [
            'method' => 'POST',
            'resource' => 'offer',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\CreateOfferRestResponse',
            'params' => [
            ]
        ],
        'DeleteOffer' => [
            'method' => 'DELETE',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\DeleteOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetListingFees' => [
            'method' => 'POST',
            'resource' => 'offer/get_listing_fees',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetListingFeesRestResponse',
            'params' => [
            ]
        ],
        'GetOffer' => [
            'method' => 'GET',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetOffers' => [
            'method' => 'GET',
            'resource' => 'offer',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetOffersRestResponse',
            'params' => [
                'format' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'PublishOffer' => [
            'method' => 'POST',
            'resource' => 'offer/{offerId}/publish',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\PublishOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'WithdrawOffer' => [
            'method' => 'POST',
            'resource' => 'offer/{offerId}/withdraw',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\WithdrawOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateOffer' => [
            'method' => 'PUT',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\UpdateOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateOrReplaceProductCompatibility' => [
            'method' => 'PUT',
            'resource' => 'inventory_item/{sku}/product_compatibility',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteProductCompatibility' => [
            'method' => 'DELETE',
            'resource' => 'inventory_item/{sku}/product_compatibility',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetProductCompatibility' => [
            'method' => 'GET',
            'resource' => 'inventory_item/{sku}/product_compatibility',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\GetProductCompatibilityRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'PublishOfferByInventoryItemGroup' => [
            'method' => 'POST',
            'resource' => 'offer/publish_by_inventory_item_group',
            'responseClass' => '\SONHH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse',
            'params' => [
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse
     */
    public function bulkUpdatePriceAndQuantity(\SONHH\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request)
    {
        return $this->bulkUpdatePriceAndQuantityAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkUpdatePriceAndQuantityAsync(\SONHH\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request)
    {
        return $this->callOperationAsync('BulkUpdatePriceAndQuantity', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse
     */
    public function createOrReplaceInventoryItem(\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request)
    {
        return $this->createOrReplaceInventoryItemAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemAsync(\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceInventoryItem', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemRestResponse
     */
    public function deleteInventoryItem(\SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request)
    {
        return $this->deleteInventoryItemAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemAsync(\SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryItem', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetInventoryItemRestResponse
     */
    public function getInventoryItem(\SONHH\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request)
    {
        return $this->getInventoryItemAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemAsync(\SONHH\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItem', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse
     */
    public function getInventoryItems(\SONHH\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request)
    {
        return $this->getInventoryItemsAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemsAsync(\SONHH\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItems', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse
     */
    public function createOrReplaceInventoryItemGroup(\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request)
    {
        return $this->createOrReplaceInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemGroupAsync(\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceInventoryItemGroup', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestResponse
     */
    public function deleteInventoryItemGroup(\SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request)
    {
        return $this->deleteInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemGroupAsync(\SONHH\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryItemGroup', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetInventoryItemGroupRestResponse
     */
    public function getInventoryItemGroup(\SONHH\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request)
    {
        return $this->getInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemGroupAsync(\SONHH\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItemGroup', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse
     */
    public function bulkMigrateListings(\SONHH\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request)
    {
        return $this->bulkMigrateListingsAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkMigrateListingsAsync(\SONHH\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request)
    {
        return $this->callOperationAsync('BulkMigrateListings', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse
     */
    public function createInventoryLocation(\SONHH\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request)
    {
        return $this->createInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInventoryLocationAsync(\SONHH\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('CreateInventoryLocation', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\DeleteInventoryLocationRestResponse
     */
    public function deleteInventoryLocation(\SONHH\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request)
    {
        return $this->deleteInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryLocationAsync(\SONHH\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryLocation', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\DisableInventoryLocationRestResponse
     */
    public function disableInventoryLocation(\SONHH\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request)
    {
        return $this->disableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disableInventoryLocationAsync(\SONHH\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('DisableInventoryLocation', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\EnableInventoryLocationRestResponse
     */
    public function enableInventoryLocation(\SONHH\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request)
    {
        return $this->enableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableInventoryLocationAsync(\SONHH\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('EnableInventoryLocation', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse
     */
    public function getInventoryLocation(\SONHH\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request)
    {
        return $this->getInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryLocationAsync(\SONHH\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryLocation', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse
     */
    public function getInventoryLocations(\SONHH\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request)
    {
        return $this->getInventoryLocationsAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryLocationsAsync(\SONHH\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryLocations', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\UpdateInventoryLocationRestResponse
     */
    public function updateInventoryLocation(\SONHH\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request)
    {
        return $this->updateInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInventoryLocationAsync(\SONHH\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('UpdateInventoryLocation', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOfferRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\CreateOfferRestResponse
     */
    public function createOffer(\SONHH\eBaySDK\Inventory\Types\CreateOfferRestRequest $request)
    {
        return $this->createOfferAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOfferAsync(\SONHH\eBaySDK\Inventory\Types\CreateOfferRestRequest $request)
    {
        return $this->callOperationAsync('CreateOffer', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\DeleteOfferRestResponse
     */
    public function deleteOffer(\SONHH\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request)
    {
        return $this->deleteOfferAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOfferAsync(\SONHH\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request)
    {
        return $this->callOperationAsync('DeleteOffer', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetListingFeesRestResponse
     */
    public function getListingFees(\SONHH\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request)
    {
        return $this->getListingFeesAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingFeesAsync(\SONHH\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request)
    {
        return $this->callOperationAsync('GetListingFees', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetOfferRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetOfferRestResponse
     */
    public function getOffer(\SONHH\eBaySDK\Inventory\Types\GetOfferRestRequest $request)
    {
        return $this->getOfferAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOfferAsync(\SONHH\eBaySDK\Inventory\Types\GetOfferRestRequest $request)
    {
        return $this->callOperationAsync('GetOffer', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetOffersRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetOffersRestResponse
     */
    public function getOffers(\SONHH\eBaySDK\Inventory\Types\GetOffersRestRequest $request)
    {
        return $this->getOffersAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetOffersRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOffersAsync(\SONHH\eBaySDK\Inventory\Types\GetOffersRestRequest $request)
    {
        return $this->callOperationAsync('GetOffers', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\PublishOfferRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\PublishOfferRestResponse
     */
    public function publishOffer(\SONHH\eBaySDK\Inventory\Types\PublishOfferRestRequest $request)
    {
        return $this->publishOfferAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\PublishOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishOfferAsync(\SONHH\eBaySDK\Inventory\Types\PublishOfferRestRequest $request)
    {
        return $this->callOperationAsync('PublishOffer', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\WithdrawOfferRestResponse
     */
    public function withdrawOffer(\SONHH\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request)
    {
        return $this->withdrawOfferAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function withdrawOfferAsync(\SONHH\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request)
    {
        return $this->callOperationAsync('WithdrawOffer', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\UpdateOfferRestResponse
     */
    public function updateOffer(\SONHH\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request)
    {
        return $this->updateOfferAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOfferAsync(\SONHH\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request)
    {
        return $this->callOperationAsync('UpdateOffer', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse
     */
    public function createOrReplaceProductCompatibility(\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request)
    {
        return $this->createOrReplaceProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceProductCompatibilityAsync(\SONHH\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceProductCompatibility', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestResponse
     */
    public function deleteProductCompatibility(\SONHH\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request)
    {
        return $this->deleteProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductCompatibilityAsync(\SONHH\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('DeleteProductCompatibility', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\GetProductCompatibilityRestResponse
     */
    public function getProductCompatibility(\SONHH\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request)
    {
        return $this->getProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCompatibilityAsync(\SONHH\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('GetProductCompatibility', $request);
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request
     * @return \SONHH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse
     */
    public function publishOfferByInventoryItemGroup(\SONHH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request)
    {
        return $this->publishOfferByInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \SONHH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishOfferByInventoryItemGroupAsync(\SONHH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('PublishOfferByInventoryItemGroup', $request);
    }
}
