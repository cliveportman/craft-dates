<?php
/**
 * Dates plugin for Craft CMS 3.x
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\dates\variables;

use cliveportman\dates\Dates;

use Craft;

/**
 * Dates Variable
 *
 * @author    Clive Portman
 * @package   Dates
 * @since     1.0.0
 */
class DatesVariable
{
    // Public Methods
    // =========================================================================

    /**
     *
     *     {{ craft.dates.lastNumberOfMonths(12) }}
     *
     * @param null $optional
     * @return string
     */
    public function lastNumberOfMonths($num = 12)
    {
        $return = Dates::$plugin->datesService->lastNumberOfMonths($num);

        return $return;
    }
}
