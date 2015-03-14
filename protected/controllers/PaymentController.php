<?php

 /*Payment controller is used to perform the payment gateway operation*/

class PaymentController extends Controller {

public function actionPaymentPage() {
		$memberID = $_GET['memberID'];
		$this->render('paymentPage', array('pkCustomerID' => $memberID));

	}


}
