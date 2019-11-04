<?php

namespace Hieu\Quotation\Api\Data;

interface ProductDataInterface {

    const ID = 'entity_id';
    const NAME = 'name';
    const SMALL_IMAGE = 'small_image';
    const THUMBNAIL = 'thumbnail';
    const DESCRIPTION = 'description';
    const SKU = 'sku';
    const PRICE = 'price';
    const WEIGHT = 'weight';
    const STATUS = 'status';
    const MANUFACTURER = 'manufacturer';
//    const ITEMDIMENSION = 'item_dimension';
//    const DIMENSIONS_HEIGHT = 'ts_dimensions_height';
//    const DIMENSIONS_LENGTH = 'ts_dimensions_length';
//    const DIMENSIONS_WIDTH = 'ts_dimensions_width';

    /**
     * @return int
     */
    public function getEntityId();

    /**
     * @param int $entityId
     * @return $this
     */
    public function setEntityId($entityId);

    /**
     * @return string name
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getSmallImage();

    /**
     * @param string $smallImage
     * @return $this
     */
    public function setSmallImage($smallImage);

    /**
     * @return string
     */
    public function getThumbnail();

    /**
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * @return float
     */
    public function getPrice();

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight);

    /**
     * @return int
     */
    public function getStatus();

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * @return int
     */
    public function getManufacturer();

    /**
     * @param int $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer);
}