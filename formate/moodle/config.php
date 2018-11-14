<?php  // Moodle configuration file
//phpinfo();
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'formate';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'TYdEYWEw';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://formate.plataformate.com';
$CFG->dataroot  = '/usr/share/nginx/html/formate/moodledata';
$CFG->admin     = 'admin';
$CFG->dirroot = '/usr/share/nginx/html/formate/moodle';
//$CFG->debug = 6143; 
//$CFG->debugdisplay = 1;
//$CFG->themedesignermode = true;

$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php');
ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);
$CFG->debug = 30719; // DEBUG_ALL, but that constant is not defined here.
// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
