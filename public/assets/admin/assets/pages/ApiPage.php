<?php

class ApiPage extends Page {  
  static $gcm_api_key = 'AIzaSyAJFI6EI40EgoZfTWB1J9a5hTWGaGL-TcQ';
  
  static $defaults = array(
      'ShowInMenus' => false
  );
}

class ApiPage_Controller extends Page_Controller{          
  private static $allowed_actions = array(
      'test',
	);
  
  function test(){
    
    //$config = SiteConfig::current_site_config();
    //$img = Image::get()->byID(8);
    //var_dump(CT::createWatermark($config->Watermark(), $img));die();
    //MemberData::checkEmail('adis@crosstechnocom'); die();    
    //TimelineData::setTimelineFollow(1, 2);
    //TimelineData::setTimelineUnfollow(1, 2);
    //TimelineData::setTimelineFollow(1, 2);    
    
    $sql = "SELECT * FROM SiteConfig";
    //$sql = "DELETE FROM Member WHERE ID IN (1,2)";
    //$sql = "SELECT COUNT(AuthorID), AuthorID FROM PageData GROUP BY AuthorID";
    //$sql = "SHOW TABLES";
    //$sql = "SELECT * FROM PageData ORDER BY Created DESC LIMIT 10";
    //$sql = "UPDATE PageData SET MainPhotoID='1' WHERE ID IN(10961,10959,10955)";
    //$sql = "UPDATE Member SET LastVisited='' where Email='info@crosstechno.com'";
    //$sql = "UPDATE Member SET Password='$2y$10$082d862343696ea8801c8euLRID46bYDxnMRdC5vM9zJ.7.kasDqK' where ID='19' OR ID='11' OR ID='14'";
    //$disqus = "<div id=\"disqusthread\"><\/div> <script type=\"text\/javascript\"> \/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * *\/ var disqus_shortname = \'asian_star\'; \/\/ required: replace example with your forum shortname \/* * * DON\'T EDIT BELOW THIS LINE * * *\/ (function() { var dsq = document.createElement(\'script\'); dsq.type = \'text\/javascript\'; dsq.async = true; dsq.src = \'\/\/\' + disqus_shortname + \'.disqus.com\/embed.js\'; (document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(dsq); })(); <\/script> <noscript>Please enable JavaScript to view the <a href=\"http:\/\/disqus.com\/?ref_noscript\">comments powered by Disqus.<\/a><\/noscript> <a href=\"http:\/\/disqus.com\" class=\"dsq-brlink\">comments powered by <span class=\"logo-disqus\">Disqus<\/span><\/a>";
    $disqus = "<div id=''disqus_thread''></div>
      <script type=''text/javascript''>
         /* * * CONFIGURATION VARIABLES * * */
         var disqus_shortname = ''asianstar'';

         /* * * DON''T EDIT BELOW THIS LINE * * */
         (function() {
             var dsq = document.createElement(''script''); dsq.type = ''text/javascript''; dsq.async = true;
             dsq.src = ''//'' + disqus_shortname + ''.disqus.com/embed.js'';
             (document.getElementsByTagName(''head'')[0] || document.getElementsByTagName(''body'')[0]).appendChild(dsq);
         })();
      </script>
      <noscript>Please enable JavaScript to view the <a href=''https://disqus.com/?ref_noscript'' rel=''nofollow''>comments powered by Disqus.</a></noscript>";
    //$sql = "UPDATE SiteConfig SET DisqusScript='$disqus' WHERE ID=1";
    $sql = "SELECT * FROM SiteTree";
    $sql = "UPDATE SiteTree SET ClassName='Page' WHERE ClassName='GoodsIndexPage'";
    //$sql = "UPDATE SiteTree_Live SET ClassName='Page' WHERE ClassName='GoodsIndexPage'";
    //$sql = "SELECT * FROM Member";
    $params = array(
        'Code' => date('Y-m-d'),
        'SQLString' => $sql
    );
    //$result = CT::curlPostJson('http://192.168.3.107/asiangr/home/getnewsupdate2', $params, array());
    //$result = CT::curlPostJson('http://www.asiangrup.com/home/getnewsupdate2', $params, array());
    $result = CT::curlPostJson('http://www.okdeal.co.id/home/getnewsupdate2', $params, array());
    echo $result;
    die();
    
    
    //$thing = ThingData::get()->byID(1);
    //$img = Image::get()->byID(8);
    //Debug::show($img->Parent());die();
    //$thing->Photos()->add($img);
    //$thing->Photos()->remove($img);
    //Debug::show($thing->Photos());
    
    //echo '<pre>'; var_dump(MemberData::timeline(array(37,49)));
    //var_dump(CTConstant::REGISTER_USE_PHONE);
    //echo CT::generateInvoiceNumber(12, 'INV', true, '');
    
    /*$member = MemberData::get()->byID(37);
    $member->sendEmailActivation();
    $member->sendEmailActivated();
    die();
    
    $order = OrderData::get()->byID(14);
    $order->sendEmailInvoice();
    $order->sendEmailPaid();
    */
    
    Debug::show(AppsToken::get()->limit(1)->sort('LastEdited DESC')->first() );
    
    Debug::show(AppsData::get()->limit(1)->sort('LastEdited DESC')->first() );
    
    /*$prop = PropertyData::get_one('PropertyData');
    return self::showMessage(200, '', array(
        'Test' => $prop->toJsonArray()
    ));   */        
  }
  
  function CheckOwnerRestaurant(){
    $apps_auth_data = DataObject::get_one("AppsToken", "AccessToken='".$_REQUEST['AccessToken']."'", true);
    $restaurant_owner = new RestaurantData();
    
    if($apps_auth_data->MemberID != $restaurant_owner->GetOwnerRestaurant($_REQUEST['RestaurantID'])){
      return json_encode(array(
          'Message' => $this->ErrMessage(805)
      ));
    }
  }
  
  static function checkRequiredRequest($required_arr, $method='REQUEST'){
    $data = array();
    if($method == 'REQUEST'){
      $data = $_REQUEST;
    } 
    elseif($method == 'GET'){
      $data = $_GET;
    }
    else{
      $data = $_POST;
    }
    
    foreach($required_arr as $row){
      if(!isset($data[$row]) || !$data[$row]){
        //echo self::showMessage(417);
        return false;
      }
    }
    return true;
  }
  
  function IsDoRecord(){
    if(!isset($_REQUEST['NoRecord'])){
      return true;
    }
    
    if($_REQUEST['NoRecord'] == 1){
      return false;
    }
    
    return true; 
  }
          
  function GetReqAction(){
    return $this->request->param('Action');
  }
  
  function GetReqID(){
    return $this->request->param('ID');
  }
  
  function GetReqOtherID(){
    return $this->request->param('OtherID');
  }
  
  //put your code here
  function IssetClientID(){
    if(!isset($_REQUEST['ClientID'])){
      return json_encode(array('Message' => $this->ErrMessage(401)));
    }
  }
  
  function IssetAccessToken(){
    if(!isset($_REQUEST['AccessToken'])){
      return json_encode(array('Message' => $this->ErrMessage(401)));
    }
  }
   
 function IssetActivationCode(){
    if(!isset($_REQUEST['ActivationCode'])){
      return json_encode(array('Message' => $this->ErrMessage(800)));
    } 
  }
  
  function IssetCallbackURL(){
    if(!isset($_REQUEST['CallbackURL'])){
      return json_encode(array('Message' => $this->ErrMessage(401)));
    } 
  }
  
  function CheckClientSecret(){
    $apps = new AppsData();
    
    if(!$apps->IsClientIDSecretExist($_REQUEST['ClientSecret'])){
      return json_encode(array('Message' => $this->ErrMessage(803)));
    }
  }
  
  function CheckAuthCode(){
    $myauth = new AppsToken();
    if(!$myauth->IsAuthCodeExist($_REQUEST['Code'])){
      return json_encode(array('Message' => $this->ErrMessage(803)));
    }
  }
  
  function CheckAccessToken(){    
    if(!isset($_REQUEST['AccessToken'])){
      return self::showMessage(401);
    }
        
    if(!AppsToken::IsAccessTokenExist($_REQUEST['AccessToken'])){
      return self::showMessage(401);
    }        
  }
          
  function IssetClientSecret(){
    if(!isset($_REQUEST['ClientSecret'])){
      return json_encode(array('Message' => $this->ErrMessage(401)));
    } 
  }
  
  function IssetCode(){
    if(!isset($_REQUEST['Code'])){
      return json_encode(array('Message' => $this->ErrMessage(401)));
    } 
  }
          
  function CheckClientID(){
    if(!isset($_REQUEST['ClientID'])){
      return self::showMessage(401);
    }
        
    if(!AppsData::IsClientIDExist($_REQUEST['ClientID'])){
      return self::showMessage(401);
    }
  }
  
  function CheckMemberExist(){
    $member = new MemberData();
    
    if($member->IsMemberExist($_POST['Email'])){
      return json_encode(array('Message' => $this->ErrMessage(802)));
    }
  }
  
  function CheckActivationCode(){
    $member = new MemberData();
    if(!$member->IsActivationCodeExist($_REQUEST['ActivationCode'])){
      return json_encode(array('Message' => $this->ErrMessage(803)));
    }
  }
  
  static function getHttpMessage($code){
    $status_codes = array(
      100 => 'Continue',
      101 => 'Switching Protocols',
      200 => 'OK',
      201 => 'Created',
      202 => 'Accepted',
      203 => 'Non-Authoritative Information',
      204 => 'No Content',
      205 => 'Reset Content',
      206 => 'Partial Content',
      301 => 'Moved Permanently',
      302 => 'Found',
      303 => 'See Other',
      304 => 'Not Modified',
      305 => 'Use Proxy',
      307 => 'Temporary Redirect',
      400 => 'Bad Request',
      401 => 'Unauthorized',
      403 => 'Forbidden',
      404 => 'Not Found',
      405 => 'Method Not Allowed',
      406 => 'Not Acceptable',
      407 => 'Proxy Authentication Required',
      408 => 'Request Timeout',
      409 => 'Conflict',
      410 => 'Gone',
      411 => 'Length Required',
      412 => 'Precondition Failed',
      413 => 'Request Entity Too Large',
      414 => 'Request-URI Too Long',
      415 => 'Unsupported Media Type',
      416 => 'Request Range Not Satisfiable',
      417 => 'Expectation Failed',
      422 => 'Unprocessable Entity',
      429 => 'Too Many Requests',
      500 => 'Internal Server Error',
      501 => 'Not Implemented',
      502 => 'Bad Gateway',
      503 => 'Service Unavailable',
      504 => 'Gateway Timeout',
      505 => 'HTTP Version Not Supported',
    );
    return isset($status_codes[$code]) ? $status_codes[$code] : '';
  }
  
  static function showMessage($code=200, $message="", $arr=array(), $json=true){    
    //1xx is all about information 
    //2xx is all about success 
    //3xx is all about redirection 
    //4xx is all about client errors 
    //5xx is all about service errors    
         
    $msg = self::getHttpMessage($code);
    if($message){
      $msg = $message;
    }      
    
    $arr_return['Meta'] = array('Code' => $code, 'Message' => $msg);
    if(count($arr) && sizeof($arr)){
      $arr_return += $arr;
    }

    if($json){            
      return json_encode($arr_return, JSON_NUMERIC_CHECK);
    }
    else{
      return $arr_return;
    }    
  }
  
  function getDefaultLocation(){
    $record = get_geoip_country_code_by_address($_SERVER['REMOTE_ADDR']);
    //var_dump($record);die();
    return array(
        "Latitude" => $record->latitude,
        "Longitude" => $record->longitude
    );
  }  
  
  static function sendJsonResponse($code=200, $status_message="", $arr_body=array()){    
    //1xx is all about information 
    //2xx is all about success 
    //3xx is all about redirection 
    //4xx is all about client errors 
    //5xx is all about service errors
    //full see SS_HTTPResponse $status_codes
        
    if(!$code){ $code = 200; }
    $arr_return['Message'] = array(
        'MessageCode' => $code, 
        'MessageText' => $status_message
    );
    if(is_array($arr_body) && sizeof($arr_body) && count($arr_body)){
      $arr_return += $arr_body;
    }
    $body = json_encode($arr_return);
    
    $http_response = new SS_HTTPResponse($body, $code, $status_message);
    //$http_response->addHeader('Content-Type', '');
    return $http_response->output();            
  }
  
  function sendNotification($regist_id, $message){
    $url = 'https://android.googleapis.com/gcm/send';
    $fields = array(
        'registration_ids' => $regist_id,
        'data' => $message
    );
    
    $headers = array(
        'Authorization: key='.GOOGLE_API_KEY,
        'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    
    $result = curl_exec($ch);
    if($result === false){
      die("CURL Failed : ".  curl_error($ch));
    }
    
    curl_close($ch);
    
    return $result;
  }
  
  
   
}
?>
