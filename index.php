<?php 
$amount = filter_input(INPUT_POST, 'amount');
$finalamount = 0 ;
define ('EUR_CZK', 25);
define ('USD_CZK', 21);
define ('RUB_CZK', 0,3);
define ('GBP_CZK',29);
define ('USD_EUR',25);
define ('RUB_EUR',0,3);
define ('GBP_EUR',29);
define ('RUB_GBP',25);
define ('USD_GBP',21)
define ('USD_RUB',0,3);

$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
$curencyfrom;
$curencyto;
$text = "Převod je hotov : " ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Směnárna</h1>
<br>
<?php
if (isset($sub)) {
    switch ($switch) {
        case 'czk_eur': 
            $finalamount = $amount / EUR_CZK ;
            $convertfrom = " CZK " ;
            $convertto = " EUR " ;
                break;
       case 'czk_usd': 
                $finalamount = $amount / USD_CZK ;
                $convertfrom = " CZK " ;
                $convertto = " USD " ;
                break;
       case 'czk_gbp': 
                    $finalamount = $amount / GBP_CZK ;
                    $convertfrom = " CZK " ;
                    $convertto = " GBP " ;
                            break;
        case 'czk_rub': 
                    $finalamount = $amount / RUB_CZK;
                    $convertfrom = " RUB " ;
                    $convertto = " CZK " ;
                    break;

    case 'eur_czk': 
            $finalamount = $amount * EUR_CZK ;
            $convertfrom = " EUR " ;
            $convertto = " CZK " ;
            break;
    case 'eur_usd':
            $finalamount = $amount * USD_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " USD " ;
            break;
    case 'eur_rub': 
            $finalamount = $amount * RUB_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " RUB " ;
            break;
    case 'eur_gbp': 
            $finalamount = $amount * GBP_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " GBP " ;
            break;
     
    
    
    case 'usd_czk': 
            $finalamount = $amount * USD_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
    case 'usd_eur': 
            $finalamount = $amount * USD_EUR ;
            $convertfrom = " USD " ;
            $convertto = " EUR " ;
            break;
    case 'usd_rub': 
            $finalamount = $amount * USD_RUB ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
    
    case 'usd_gbp': 
            $finalamount = $amount * USD_GBP;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;
    
     
    
    case 'rub_czk': 
            $finalamount = $amount * RUB_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
    case 'rub_eur': 
            $finalamount = $amount * RUB_EUR ;
            $convertfrom = " US " ;
            $convertto = " EUR " ;
            break;
    case 'rub_usd': 
            $finalamount = $amount * USD_RUB ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
    case 'rub_gbp': 
            $finalamount = $amount * GBP_EUR;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;
    
    
    case 'gbp_czk': 
            $finalamount = $amount * GBP_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
    case 'gbp_eur': 
            $finalamount = $amount * GBP_EUR ;
            $convertfrom = " US " ;
            $convertto = " EUR " ;
            break;
    case 'gbp_usd': 
            $finalamount = $amount * USD_GBP ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
    case 'gbp_rub': 
            $finalamount = $amount * RUB_GBP;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;   

  
                                     
                  }

        $all =$text . $amount . $curencyfrom . " = " . $finnal . $curencyto ?>


    <form action="index.php" method="post">

     <br>
     <label for="quantity">Kolik peněz budete převádět?:</label>
     <input type="number" id="quantity" name="quantity" min="1" max="500">
     <br>
     <br>
    <label for="money">Z jaké měny budete převádět?</label>
    <select name="money" id="money">
        <option value="CZK">České Koruny</option>
        <option value="EUR">Eura</option>
        <option value="GBR">Libry</option>
        <option value="RUB>">Ruble</option>
        <option value="USD">Dolary</option>
    </select>
    <br>
    <br>

    <label for="money">Do jaké měny budete převádět?</label>
    <select name="money" id="money">
        <option value="CZK">České Koruny</option>
        <option value="EUR">Eura</option>
        <option value="GBR">Libry</option>
        <option value="RUB>">Ruble</option>
        <option value="USD">Dolary</option>
    </select>
        <br>
        <br>
        <input type="submit" value="odeslat" name="odeslat">
    </form>


</body>
</html>