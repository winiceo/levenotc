<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\Sprinkle\Web\Facades;

use UserFrosting\System\Facade;

/**
 * Implements facade for the "debugLogger" service
 *
 * @author Alex Weissman (https://alexanderweissman.com)
 */
class Assets extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'assets';
    }
}
