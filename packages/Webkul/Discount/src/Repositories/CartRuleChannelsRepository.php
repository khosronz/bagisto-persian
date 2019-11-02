<?php

namespace Webkul\Discount\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * CartRuleRepository
 *
 * @author  Prashant Singh <prashant.singh852@webkul.comp> @prashant-webkul
 * @copyright 2019 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CartRuleChannelsRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Discount\Contracts\CartRuleChannels';
    }
}
