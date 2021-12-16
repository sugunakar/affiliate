<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-25 10:04:32 --> Query error: Unknown column 'shippingInfo.sourceId' in 'field list' - Invalid query: SELECT TIMEDIFF(shippingInfo.endDate, shippingInfo.startDate) as timeDifference, `shippingInfo`.`sourceId`, `shippingInfo`.`destinationId`, `shippingInfo`.`startDate`, `shippingInfo`.`endDate`, `shippingInfo`.`statusId`
FROM `od_shipping_tracking` `shippingInfo`
WHERE `shippingInfo`.`shippingNumber` = 'undefined'
ORDER BY `shippingInfo`.`trackingId` DESC
ERROR - 2021-10-25 10:04:40 --> Query error: Unknown column 'shippingInfo.sourceId' in 'field list' - Invalid query: SELECT TIMEDIFF(shippingInfo.endDate, shippingInfo.startDate) as timeDifference, `shippingInfo`.`sourceId`, `shippingInfo`.`destinationId`, `shippingInfo`.`startDate`, `shippingInfo`.`endDate`, `shippingInfo`.`statusId`
FROM `od_shipping_tracking` `shippingInfo`
WHERE `shippingInfo`.`shippingNumber` = 'undefined'
ORDER BY `shippingInfo`.`trackingId` DESC
