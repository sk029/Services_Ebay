<?PHP
/**
 * Get information about a user
 *
 * $Id$
 *
 * @package Services_Ebay
 * @author  Stephan Schmidt <schst@php.net>
 */
class Services_Ebay_Call_GetUser extends Services_Ebay_Call 
{
   /**
    * verb of the API call
    *
    * @var  string
    */
    protected $verb = 'GetUser';

   /**
    * parameter map that is used, when scalar parameters are passed
    *
    * @var  array
    */
    protected $paramMap = array(
                                 'UserId',
                                 'ItemId'
                                );
   /**
    * make the API call
    *
    * @param    object Services_Ebay_Session
    * @return   string
    */
    public function call(Services_Ebay_Session $session)
    {
        $return = parent::call($session);
        $user   = Services_Ebay::loadModel('User', $return['User'], $session);
        
        return $user;
    }
}
?>