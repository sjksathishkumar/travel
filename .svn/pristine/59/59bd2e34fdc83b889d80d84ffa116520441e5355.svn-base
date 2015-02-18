<?php
class PaypalController extends Controller
{
 public function actionBuy(){

 // set
 $paymentInfo['Order']['theTotal'] = 0.00;
 $paymentInfo['Order']['description'] = "Some payment description here";
 $paymentInfo['Order']['quantity'] = '1';

 // call paypal
 $result = Yii::app()->Paypal->SetExpressCheckout($paymentInfo);
 //Detect Errors
 if(!Yii::app()->Paypal->isCallSucceeded($result)){
 if(Yii::app()->Paypal->apiLive === true){
 //Live mode basic error message
 $error = 'We were unable to process your request. Please try again later';
 }else{
 //Sandbox output the actual error message to dive in.
 $error = $result['L_LONGMESSAGE0'];
 }
 echo $error;
 Yii::app()->end();

 }else {
 // send user to paypal
 $token = urldecode($result["TOKEN"]);

 $payPalURL = Yii::app()->Paypal->paypalUrl.$token;
 $this->redirect($payPalURL);
 }
 }

 public function actionConfirm()
 {
 $token = trim($_GET['token']);
 $payerId = trim($_GET['PayerID']);



 $result = Yii::app()->Paypal->GetExpressCheckoutDetails($token);

 $result['PAYERID'] = $payerId;
 $result['TOKEN'] = $token;
 $result['ORDERTOTAL'] = 0.00;

 //Detect errors
 if(!Yii::app()->Paypal->isCallSucceeded($result)){
 if(Yii::app()->Paypal->apiLive === true){
 //Live mode basic error message
 $error = 'We were unable to process your request. Please try again later';
 }else{
 //Sandbox output the actual error message to dive in.
 $error = $result['L_LONGMESSAGE0'];
 }
 echo $error;
 Yii::app()->end();
 }else{

 $paymentResult = Yii::app()->Paypal->DoExpressCheckoutPayment($result);
 //Detect errors
 if(!Yii::app()->Paypal->isCallSucceeded($paymentResult)){
 if(Yii::app()->Paypal->apiLive === true){
 //Live mode basic error message
 $error = 'We were unable to process your request. Please try again later';
 }else{
 //Sandbox output the actual error message to dive in.
 $error = $paymentResult['L_LONGMESSAGE0'];
 }
 echo $error;
 Yii::app()->end();
 }else{
 //payment was completed successfully

 $this->render('confirm');
 }

 }
 }

 public function actionCancel()
 {
 //The token of the cancelled payment typically used to cancel the payment within your application
 $token = $_GET['token'];

 $this->render('cancel');
 }

 public function actionDirectPayment(){
 $paymentInfo = array('Member'=>
 array(
 'first_name'=>'vipin',
 'last_name'=>'tomar',
 'billing_address'=>'New Delhi',
 'billing_address2'=>'New Ashoknagar',
 'billing_country'=>'India',
 'billing_city'=>'New Ashoknagar',
 'billing_state'=>'New Delhi',
 'billing_zip'=>'201232'
 ),
 'CreditCard'=>
 array(
 'credit_type'=>'Visa',
 'card_number'=>'4767141527528126',
 'expiration_month'=>'03',
 'expiration_year'=>'2019',
 'cv_code'=>''
 ),
 'Order'=>
 array('theTotal'=>100.00)
 );

 /*
 * On Success, $result contains [AMT] [CURRENCYCODE] [AVSCODE] [CVV2MATCH]
 * [TRANSACTIONID] [TIMESTAMP] [CORRELATIONID] [ACK] [VERSION] [BUILD]
 *
 * On Fail, $ result contains [AMT] [CURRENCYCODE] [TIMESTAMP] [CORRELATIONID]
 * [ACK] [VERSION] [BUILD] [L_ERRORCODE0] [L_SHORTMESSAGE0] [L_LONGMESSAGE0]
 * [L_SEVERITYCODE0]
 */

 $result = Yii::app()->Paypal->DoDirectPayment($paymentInfo);

 //Detect Errors
 if(!Yii::app()->Paypal->isCallSucceeded($result)){
 if(Yii::app()->Paypal->apiLive === true){
 //Live mode basic error message
 $error = 'We were unable to process your request. Please try again later';
 }else{
 //Sandbox output the actual error message to dive in.
 $error = $result['L_LONGMESSAGE0'];
 }
 echo $error;

 }else {
 //Payment was completed successfully, do the rest of your stuff
 	$this->redirect(array(''));
 }

 Yii::app()->end();
 }
}