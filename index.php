<?php
/**
 * Base file where everything is configured and dispatched to
 *
 * PHP version 5
 *
 * @category  Base
 * @package   LDP
 * @author    Sarven Capadisli <info@csarven.ca>
 * @copyright 2010 Digital Enterprise Research Institute
 * @license   http://www.fsf.org/licensing/licenses/gpl-3.0.html GNU General Public License version 3.0
 * @link      http://deri.org/
 */

define('SITE_DIR', '/var/www/stats.270a.info/'); /* Site directory */
define('LDP_DIR', '/var/www/lib/linked-data-pages/'); /* This package's directory */
define('PAGET_DIR', '/var/www/lib/paget/');
define('MORIARTY_DIR', '/var/www/lib/moriarty/');
define('MORIARTY_ARC_DIR', '/var/www/lib/arc2/');

define('STORE_URI', 'http://localhost:3030/dataset/query');

require_once LDP_DIR . 'classes/LDP_Config.php';
require_once LDP_DIR . 'classes/LDP.php';
require_once SITE_DIR .'classes/SITE_Template.php';

$config = new LDP_Config();  /* Grabs configuration values from this site */
$space = new LDP($config);  /* Starts to bulid the request */
$space->dispatch();          /* Dispatches the requested URI */
?>
