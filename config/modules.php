<?php
/**
 * Register application modules
 */

$application->registerModules(
    [
        'frontend'  => [
            'className' => 'App\Modules\Frontend\Module',
            'path'      => __DIR__ . '/../app/modules/frontend/Module.php'
        ],
//        'dashboard' => [
//            'className' => 'Modules\Modules\Dashboard\Module',
//            'path'      => __DIR__ . '/../modules/dashboard/Module.php'
//        ]
    ]
);
