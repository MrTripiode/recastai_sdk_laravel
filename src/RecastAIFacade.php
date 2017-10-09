<?php

namespace Kanian\RecastAILaravel;

use \Illuminate\Support\Facades\Facade;

/**
 * Description of RecastAIFacade
 *
 * @author Patrick Assoa Adou (kanian77@gmail.com)
 */

class RecastAIFacade {
    
    protected static function getFacadeAccessor() {
        return 'recastai';
    }
}
