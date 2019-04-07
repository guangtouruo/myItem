<?php

use j\db\AdapterFactory;
use j\db\profiler\Profiler;

return array(
    // database
    'adapter' => function() {
            static $adapter = null;
            if($adapter){
                return $adapter;
            }

            return Adapterfactory::product(array(
                'db' => c('db'),
                'profiler' => s('dbProfiler')
            ));
        },

    'dbProfiler' => function(){
//        return null;
            if(isset($_REQUEST['debug_sql']) && $_REQUEST['debug_sql'] == '9'){
                return Profiler::getInstance();
            }
            //return Profiler::getInstance();
        },
);