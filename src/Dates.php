<?php
/**
 * Dates plugin for Craft CMS 3.x
 *
 * Add some date functions
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\dates;

use cliveportman\dates\services\DatesService as DatesServiceService;
use cliveportman\dates\variables\DatesVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 *
 * @author    Clive Portman
 * @package   Dates
 * @since     1.0.0
 *
 * @property  DatesServiceService $datesService
 */
class Dates extends Plugin
{
    // Static Properties
    // =========================================================================

    /**     *
     * @var Dates
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.4';

    // Public Methods
    // =========================================================================

    /**
     * init()
     *
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        // Register our variables
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('dates', DatesVariable::class);
            }
        );

        // Do something after we're installed
        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                    // We were just installed
                }
            }
        );
        
    }

}
