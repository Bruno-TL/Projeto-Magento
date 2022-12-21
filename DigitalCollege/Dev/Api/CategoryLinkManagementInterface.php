<?php
namespace DigitalCollege\Dev\Api;

/**
 * @api
 */
interface CategoryLinkManagementInterface
{
    /**
     * Get products assigned to a category
     * @return \DigitalCollege\Dev\Api\Data\CategoryProductLinkInterface[]
     */
    public function getAssignedProducts();
}
