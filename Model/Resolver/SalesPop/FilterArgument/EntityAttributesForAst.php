<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_SalesPopGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
declare(strict_types=1);

namespace Mageplaza\SalesPopGraphQl\Model\Resolver\SalesPop\FilterArgument;

use Magento\Framework\GraphQl\Query\Resolver\Argument\FieldEntityAttributesInterface;

/**
 * Class EntityAttributesForAst
 * @package Mageplaza\SalesPopGraphQl\Model\Resolver\SalesPop\FilterArgument
 */
class EntityAttributesForAst implements FieldEntityAttributesInterface
{
    /**
     * @var array
     */
    protected $additionalAttributes = ['pop_id', 'name', 'status', 'pop_type', 'position'];

    /**
     * EntityAttributesForAst constructor.
     *
     * @param array $additionalAttributes
     */
    public function __construct(array $additionalAttributes = [])
    {
        $this->additionalAttributes = array_merge($this->additionalAttributes, $additionalAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityAttributes(): array
    {
        $fields = [];
        foreach ($this->additionalAttributes as $attribute) {
            $fields[$attribute] = 'String';
        }

        return array_keys($fields);
    }
}
