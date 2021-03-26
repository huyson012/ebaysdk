<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Inventory\Services;

class InventoryService extends \DTS\eBaySDK\Inventory\Services\InventoryBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'BulkUpdatePriceAndQuantity' => [
            'method' => 'POST',
            'resource' => 'bulk_update_price_quantity',
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse',
            'params' => [
            ]
        ],
        'CreateOrReplaceInventoryItem' => [
            'method' => 'PUT',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\DeleteInventoryItemRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetInventoryItemRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetInventoryItemGroupRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse',
            'params' => [
            ]
        ],
        'CreateInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\DeleteInventoryLocationRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\DisableInventoryLocationRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\EnableInventoryLocationRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\UpdateInventoryLocationRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\CreateOfferRestResponse',
            'params' => [
            ]
        ],
        'DeleteOffer' => [
            'method' => 'DELETE',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\DeleteOfferRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetListingFeesRestResponse',
            'params' => [
            ]
        ],
        'GetOffer' => [
            'method' => 'GET',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetOfferRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetOffersRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\PublishOfferRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\WithdrawOfferRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\UpdateOfferRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\GetProductCompatibilityRestResponse',
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
            'responseClass' => '\DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse',
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
     * @param \DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse
     */
    public function bulkUpdatePriceAndQuantity(\DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request)
    {
        return $this->bulkUpdatePriceAndQuantityAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkUpdatePriceAndQuantityAsync(\DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request)
    {
        return $this->callOperationAsync('BulkUpdatePriceAndQuantity', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse
     */
    public function createOrReplaceInventoryItem(\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request)
    {
        return $this->createOrReplaceInventoryItemAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemAsync(\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceInventoryItem', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\DeleteInventoryItemRestResponse
     */
    public function deleteInventoryItem(\DTS\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request)
    {
        return $this->deleteInventoryItemAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemAsync(\DTS\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryItem', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetInventoryItemRestResponse
     */
    public function getInventoryItem(\DTS\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request)
    {
        return $this->getInventoryItemAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemAsync(\DTS\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItem', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse
     */
    public function getInventoryItems(\DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request)
    {
        return $this->getInventoryItemsAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemsAsync(\DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItems', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse
     */
    public function createOrReplaceInventoryItemGroup(\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request)
    {
        return $this->createOrReplaceInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemGroupAsync(\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceInventoryItemGroup', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestResponse
     */
    public function deleteInventoryItemGroup(\DTS\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request)
    {
        return $this->deleteInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemGroupAsync(\DTS\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryItemGroup', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetInventoryItemGroupRestResponse
     */
    public function getInventoryItemGroup(\DTS\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request)
    {
        return $this->getInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemGroupAsync(\DTS\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItemGroup', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse
     */
    public function bulkMigrateListings(\DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request)
    {
        return $this->bulkMigrateListingsAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkMigrateListingsAsync(\DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request)
    {
        return $this->callOperationAsync('BulkMigrateListings', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse
     */
    public function createInventoryLocation(\DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request)
    {
        return $this->createInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInventoryLocationAsync(\DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('CreateInventoryLocation', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\DeleteInventoryLocationRestResponse
     */
    public function deleteInventoryLocation(\DTS\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request)
    {
        return $this->deleteInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryLocationAsync(\DTS\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryLocation', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\DisableInventoryLocationRestResponse
     */
    public function disableInventoryLocation(\DTS\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request)
    {
        return $this->disableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disableInventoryLocationAsync(\DTS\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('DisableInventoryLocation', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\EnableInventoryLocationRestResponse
     */
    public function enableInventoryLocation(\DTS\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request)
    {
        return $this->enableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableInventoryLocationAsync(\DTS\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('EnableInventoryLocation', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse
     */
    public function getInventoryLocation(\DTS\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request)
    {
        return $this->getInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryLocationAsync(\DTS\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryLocation', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse
     */
    public function getInventoryLocations(\DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request)
    {
        return $this->getInventoryLocationsAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryLocationsAsync(\DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryLocations', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\UpdateInventoryLocationRestResponse
     */
    public function updateInventoryLocation(\DTS\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request)
    {
        return $this->updateInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInventoryLocationAsync(\DTS\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('UpdateInventoryLocation', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOfferRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\CreateOfferRestResponse
     */
    public function createOffer(\DTS\eBaySDK\Inventory\Types\CreateOfferRestRequest $request)
    {
        return $this->createOfferAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOfferAsync(\DTS\eBaySDK\Inventory\Types\CreateOfferRestRequest $request)
    {
        return $this->callOperationAsync('CreateOffer', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\DeleteOfferRestResponse
     */
    public function deleteOffer(\DTS\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request)
    {
        return $this->deleteOfferAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOfferAsync(\DTS\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request)
    {
        return $this->callOperationAsync('DeleteOffer', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetListingFeesRestResponse
     */
    public function getListingFees(\DTS\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request)
    {
        return $this->getListingFeesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingFeesAsync(\DTS\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request)
    {
        return $this->callOperationAsync('GetListingFees', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetOfferRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetOfferRestResponse
     */
    public function getOffer(\DTS\eBaySDK\Inventory\Types\GetOfferRestRequest $request)
    {
        return $this->getOfferAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOfferAsync(\DTS\eBaySDK\Inventory\Types\GetOfferRestRequest $request)
    {
        return $this->callOperationAsync('GetOffer', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetOffersRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetOffersRestResponse
     */
    public function getOffers(\DTS\eBaySDK\Inventory\Types\GetOffersRestRequest $request)
    {
        return $this->getOffersAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetOffersRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOffersAsync(\DTS\eBaySDK\Inventory\Types\GetOffersRestRequest $request)
    {
        return $this->callOperationAsync('GetOffers', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\PublishOfferRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\PublishOfferRestResponse
     */
    public function publishOffer(\DTS\eBaySDK\Inventory\Types\PublishOfferRestRequest $request)
    {
        return $this->publishOfferAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\PublishOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishOfferAsync(\DTS\eBaySDK\Inventory\Types\PublishOfferRestRequest $request)
    {
        return $this->callOperationAsync('PublishOffer', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\WithdrawOfferRestResponse
     */
    public function withdrawOffer(\DTS\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request)
    {
        return $this->withdrawOfferAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function withdrawOfferAsync(\DTS\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request)
    {
        return $this->callOperationAsync('WithdrawOffer', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\UpdateOfferRestResponse
     */
    public function updateOffer(\DTS\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request)
    {
        return $this->updateOfferAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOfferAsync(\DTS\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request)
    {
        return $this->callOperationAsync('UpdateOffer', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse
     */
    public function createOrReplaceProductCompatibility(\DTS\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request)
    {
        return $this->createOrReplaceProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceProductCompatibilityAsync(\DTS\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceProductCompatibility', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestResponse
     */
    public function deleteProductCompatibility(\DTS\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request)
    {
        return $this->deleteProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductCompatibilityAsync(\DTS\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('DeleteProductCompatibility', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\GetProductCompatibilityRestResponse
     */
    public function getProductCompatibility(\DTS\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request)
    {
        return $this->getProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCompatibilityAsync(\DTS\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('GetProductCompatibility', $request);
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request
     * @return \DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse
     */
    public function publishOfferByInventoryItemGroup(\DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request)
    {
        return $this->publishOfferByInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishOfferByInventoryItemGroupAsync(\DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('PublishOfferByInventoryItemGroup', $request);
    }
}
