<?php
//List of your modules with zf tool it is auto inserted
return array(
    'modules' => array(
        'Application',
        'Album',
    ),
    //This is default config it's listiner for stored modules
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        //merges global and local configuration usualy database optinions also default configuration
        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ),
    ),
);
