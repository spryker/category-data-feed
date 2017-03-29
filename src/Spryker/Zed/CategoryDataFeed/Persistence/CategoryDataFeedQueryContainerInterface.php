<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CategoryDataFeed\Persistence;

use Generated\Shared\Transfer\CategoryDataFeedTransfer;
use Spryker\Zed\Kernel\Persistence\QueryContainer\QueryContainerInterface;

interface CategoryDataFeedQueryContainerInterface extends QueryContainerInterface
{

    /**
     * @api
     *
     * @param CategoryDataFeedTransfer $categoryDataFeedTransfer
     *
     * @return \Spryker\Zed\Category\Persistence\CategoryQueryContainerInterface
     */
    public function getCategoryDataFeedQuery(CategoryDataFeedTransfer $categoryDataFeedTransfer);

}
