<?php

namespace Kanian\RecastAILaravel;

use RecastAI\Client;

/**
 * Description of RecastAIService
 *
 * @author Patrick Assoa Adou (kanian77@gmail.com)
 */
class RecastAIService {
    
    private $recastai;
    
    /**
     * Constructor
     * @param string $token
     * @param string $language 
     */
    public function __construct($token, $language) {
        $this->recastai = new Client($token, $language);
    }
    
    /**
     * 
     * @return Kanian\RecastAILaravel\RecastAIService
     */
    public function get() : Kanian\RecastAILaravel\RecastAIService  {
        return $this->recastai;
    }
    
    
}
