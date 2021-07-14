<?php 
// get xml
$soapClient = new SoapClient('https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL');
// Setup the GetByName parameters
$param = ['name' => 'A'];

// Call GetByName()
$error = 0;
try {
    $info = $soapClient->GetByName($param);

} catch (SoapFault $fault) {
    $error = 1;
    print($fault->faultcode.'-'.$fault->faultstring);
}

if ($error == 0) {
    //get result of getByName function
    $auth_num = $info->GetByNameResult;
    echo $auth_num->any;
    // delete var
    unset($soapClient);
}

