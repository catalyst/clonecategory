<?php

/**
 * @package  clonecategory
 * @copyright 2018, tim@avide.com.au
 * @license MIT
 * @doc https://docs.moodle.org/dev/Adding_a_web_service_to_a_plugin
 *      https://docs.moodle.org/dev/Web_services_API
 *      https://docs.moodle.org/dev/External_functions_API
 */

// External functions and web services provided by your plugin are described here.

defined('MOODLE_INTERNAL') || die();

// We defined the web service functions to install.
// $functions = array(
//     'clonecategory_service_function_name_1' => array(
//             'classname'   => 'clonecategory_external',
//             'methodname'  => 'service_function_name_1',
//             'classpath'   => 'local/clonecategory/externallib.php',
//             'description' => 'Description about the function',
//             'type'        => 'read', // Type of operations (read, write).
//     ),
//     'clonecategory_service_function_name_2' => array(
//             'classname'   => 'clonecategory_external',
//             'methodname'  => 'service_function_name_2',
//             'classpath'   => 'local/clonecategory/externallib.php',
//             'description' => 'Description about the function',
//             'type'        => 'read', // Type of operations (read, write).
//     ),
// );

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
// $services = array(
//         'My service' => array(
//                 'functions' => array ('local_zsap_core_check_user_existence'),
//                 'restrictedusers' => 0,
//                 'enabled'=>1,
//         )
// );