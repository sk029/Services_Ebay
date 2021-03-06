<?PHP
/**
 * example that fetches an item
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

$item = Services_Ebay::loadModel('Item', '110002442025', $session);
$item->Get();

$item->Title = 'Supergirl\'s bra';
$ebay->ReviseItem($item);

/*
You may also use the Revise() method
directly on the Item object

$item->Revise();
*/ 
?>
