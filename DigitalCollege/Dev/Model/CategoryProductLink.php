<?php
namespace DigitalCollege\Dev\Model;

/**
 * @codeCoverageIgnore
 */
class CategoryProductLink extends \Magento\Framework\Api\AbstractExtensibleObject implements \DigitalCollege\Dev\Api\Data\CategoryProductLinkInterface
{
    /**#@+
     * Constant for confirmation status
     */
    const KEY_SKU                   = 'sku';
    const KEY_NAME                  = 'name';
    const KEY_PRICE                 = 'price';
    const KEY_CATEGORY_DESC         = 'category_description';
    const KEY_POSITION              = 'position';
    /**#@-*/

    /**
     * Initialize internal storage
     *
     * @param \Magento\Framework\Api\ExtensionAttributesFactory
    $extensionFactory
     * @param AttributeValueFactory $attributeValueFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Api\ExtensionAttributesFactory
        $extensionFactory,
        \Magento\Framework\Api\AttributeValueFactory
        $attributeValueFactory,
        $data = []
    ) {
        $this->extensionFactory = $extensionFactory;
        $this->attributeValueFactory = $attributeValueFactory;
        parent::__construct($extensionFactory,$attributeValueFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        return $this->_get(self::KEY_SKU);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->_get(self::KEY_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return $this->_get(self::KEY_POSITION);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrice()
    {
        return $this->_get(self::KEY_PRICE);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryDescription()
    {
        return $this->_get(self::KEY_CATEGORY_DESC);
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        return $this->setData(self::KEY_SKU, $sku);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::KEY_NAME, $name);
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        return $this->setData(self::KEY_POSITION, $position);
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        return $this->setData(self::KEY_PRICE, $price);
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setCategoryDescription($description)
    {
        return $this->setData(self::KEY_CATEGORY_DESC, $description);
    }

}
