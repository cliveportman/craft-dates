<?php
/**
 * Dates plugin for Craft CMS 3.x
 *
 * Add some date functions
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\dates\services;

use cliveportman\dates\Dates;

use Craft;
use craft\base\Component;
use DateInterval;
use DatePeriod;

/**
 * DatesService Service
 *
 * @author    Clive Portman
 * @package   Dates
 * @since     1.0.0
 */
class DatesService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     *
     *     Dates::$plugin->datesService->lastNumberOfMonths($num)
     *
     * @return mixed
     */
    public function lastNumberOfMonths(int $numberOfMonths = 12)
    {

        $month = time();
        $months = [];
        for ($i = 1; $i <= $numberOfMonths; $i++) {
            $month = strtotime('last month', $month);
            $months[] = date("r", $month);
        }
        return $months;
    }
}
