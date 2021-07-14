<?php
// get xml
$xml = file_get_contents('data.xml');
$xmlObj = new SimpleXMLElement($xml);
$prices = [];
foreach($xmlObj->Param->BetInfo as $item) {
    //get BetAmount xml property as array
    $betAmount = (array)$item->BetAmount;
    //push $betAmount array first item to prices array
    $prices[]= $betAmount[0];
}
//sum total prices
$totalSum = array_sum($prices);
echo $totalSum;




