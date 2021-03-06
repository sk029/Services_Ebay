<?PHP
/**
 * example that gets your access rules for the API
 *
 * $Id$
 *
 * @package     Services_Ebay
 * @subpackage  Examples
 * @author      Stephan Schmidt
 */
error_reporting(E_ALL);
require_once '../Ebay.php';
require_once 'config.php';

$session = Services_Ebay::getSession($devId, $appId, $certId);

$session->setToken($token);

$ebay = new Services_Ebay($session);

$outage = $ebay->GetOutageSchedules();

echo	"<pre>";
print_r($outage);
echo	"</pre>";
?>