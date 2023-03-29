<?php
function sendSms($to, $message ) 
{
	$result =0;
	// turn off the WSDL cache
	ini_set("soap.wsdl_cache_enabled", "0");
	try 
	{
		$client = new SoapClient("http://www.panelesms.com/post/send.asmx?wsdl");
		$parameters['username'] = "9124590890";
		$parameters['password'] = "1362";
		$parameters['from'] = "300083952";
		$parameters['to'] = array('string' => $to);
		$parameters['text'] =iconv('UTF-8', 'UTF-8//TRANSLIT',$message);
		$parameters['isflash'] = false;
		$parameters['udh'] = "";
		$parameters['recId'] = array(0);
		$parameters['status'] = 0x0;
		$credit =  $client->GetCredit(array("username"=>$parameters['username'],"password"=>$parameters['password']))->GetCreditResult;
		if($credit > 200)
		{
			$result = $client->SendSms($parameters)->SendSmsResult;			 
		}	
		else 
		{
			$result= -200;
		}
	
	} 
	catch (SoapFault $ex) 
	{
		$result=$ex->faultstring;
	}
	
	return $result ; 
}
?>
