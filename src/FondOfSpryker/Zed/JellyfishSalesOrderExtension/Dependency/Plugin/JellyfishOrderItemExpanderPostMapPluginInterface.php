<?php

namespace FondOfSpryker\Zed\JellyfishSalesOrderExtension\Dependency\Plugin;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrderItem;

interface JellyfishOrderItemExpanderPostMapPluginInterface
{
    /**
     * Specification:
     *  - Expand JellyfishOrderItemTransfer object after mapping.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem $salesOrderItem
     *
     * @return \Generated\Shared\Transfer\JellyfishOrderItemTransfer
     */
    public function expand(
        JellyfishOrderItemTransfer $jellyfishOrderItemTransfer,
        SpySalesOrderItem $salesOrderItem
    ): JellyfishOrderItemTransfer;
}
