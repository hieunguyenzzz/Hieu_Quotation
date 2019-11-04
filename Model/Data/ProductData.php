<?php

namespace Hieu\Quotation\Model\Data;

use Hieu\Quotation\Api\Data\ProductDataInterface;
use Magento\Customer\Model\Data\Customer;

class ProductData extends \Magento\Framework\Api\AbstractExtensibleObject implements \Hieu\Quotation\Api\Data\ProductDataInterface
{
    /**
     * @return string name
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_get(self::DESCRIPTION);
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->_get(self::SKU);
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->_get(self::PRICE);
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->_get(self::WEIGHT);
    }

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        return $this->setData(self::WEIGHT, $weight);
    }

    /**
     * @return string
     */
    public function getSmallImage()
    {
        return $this->_get(self::SMALL_IMAGE);
    }

    /**
     * @param string $smallImage
     * @return $this
     */
    public function setSmallImage($smallImage)
    {
        return $this->setData(self::SMALL_IMAGE, $smallImage);
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->_get(self::THUMBNAIL);
    }

    /**
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        return $this->setData(self::THUMBNAIL, $thumbnail);
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->_get(self::ID);
    }

    /**
     * @param int $entityId
     * @return $this
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ID, $entityId);
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @return int
     */
    public function getManufacturer()
    {
        return $this->_get(self::MANUFACTURER);
    }

    /**
     * @param int $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        return $this->setData(self::MANUFACTURER, $manufacturer);
    }
}