<?php

class ContactController extends Controller {

    /**
     * This is the default 'contact' action that is invoked
     */


    public function actionIndex()
    {
    	$contact = Configurations::model()->findByPK('1');
    	$adminEmail = $contact->configurationEmail;
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$comments = $_POST['comments'];

			/* sending mail */
			$message = '<p>'.$email.'-'.$name.'-'.$mobile.'-'.$comments.'</p>';
			$mail = new YiiMailMessage;
	        $mail->subject = 'Contact message from customer';
	        $mail->setBody($message, 'text/html');
	        $mail->addTo($adminEmail);
	        $mail->setFrom($email);

			if(CUploadedFile::getInstanceByName('contact-file'))
    		{
    			$uploadedFile = CUploadedFile::getInstanceByName('contact-file'); // get the CUploadedFile
				$uploadedFileName = $uploadedFile->tempName; // will be something like 'myfile.jpg'
				$swiftAttachment = Swift_Attachment::fromPath($uploadedFileName); // create a Swift Attachment
				$mail->attach($swiftAttachment); // now attach the correct type
    		}

			if(Yii::app()->mail->send($mail)){
				$mail = new YiiMailMessage;
				$mail->subject = 'Wish from Travelogini';
		        $mail->setBody('<p>Thanks for your valueable feedback<br>Regards<br>Team Travelogini</p>', 'text/html');
		        $mail->addTo($email);
		        $mail->setFrom($adminEmail);
		        Yii::app()->mail->send($mail); 

		        Yii::app()->user->setState("message","contact-mail-success");
			    $this->redirect('../site/notification');
			}
			else
			{
				Yii::app()->user->setState("message","contact-mail-error");
			    $this->redirect('../site/notification');
			}
		}    
		else{	
		$this->render('index');
		}
    }

}

