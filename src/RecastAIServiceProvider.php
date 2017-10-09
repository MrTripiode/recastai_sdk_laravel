<?php

namespace Kanian\RecastAILaravel;

use Illuminate\Support\ServiceProvider;
/**
 * Description of RecastAIServiceProvider
 *
 * @author Patrick Assoa Adou (kanian77@gmail.com)
 */
class RecastAIServiceProvider extends ServiceProvider {
    
    protected $defer = true;
    
    public function boot() {
	$this->publishes([
            __DIR__.'/../config/recastai.php' => config_path('recastai.php'),
	], 'recastai');
    }
        
    public function register() {
        $this->app->singleton('recastai', function($app) {
            $config = $app->make('config');
            $token = $config->get('recastai.token');
            $language = $config->get('recastai.language');
            return new RecastAIService($token, $language);
        });
    }
    
    public function provides() {
        return ['recastai'];
    }
}
