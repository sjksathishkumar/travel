<?php
/**
    Notification
 
    helper class handel the notifiactions all over the system.
    
*/
class NotificationHandler  extends CApplicationComponent{
    /**
     * @var int ID of employer .
    */    
    public $varEmployerID;
    
     /**
     * @var int parent ID of notification .
    */
    public $varParentID="0";
    
     /**
     * @var int ID of employer .
    */     
    public $varRootID;    
    /**
     * @var int ID of Application.
    */    
    public $varApplicationID;
    
    /**
     * @var char  value that siginifies the sender of notifcation
     */
    public $varNotificationFrom;

    /**
     * @var string size of notification
     */
    public $varNotificationSubject;

    /**
     * @var string body of notification
     */
    public $varNotificationBody;

    /**
     *@var char Type of notification
     */
    public $varNotificationType;

    /**
     * @var datetime the date when the notification is being added
     */
    public $varNotificationDateAdded;

    /**
     * @var char Wether read by employer or not 
     */
    public $varNotificationAdminRead;
    
    /**
     * @var char Wether read by employer or not 
     */
    public $varNotificationEmployerRead;
    
    public static function addNotification($varEmployerID,$varNotificationBody,$varNotificationType,$varNotificationFrom,$varApplicationID,$varNotificationSubject=null,$varParentID=0)
    {
        
        $notificationModel=new Notification;        
        
        if($varNotificationFrom=="A"){
            $varNotificationAdminRead="1";
            $varNotificationEmployerRead="0";
        }else{
            $varNotificationEmployerRead="1";
            $varNotificationAdminRead="0";
        }        
        if($varNotificationSubject==''){
            $varNotificationSubject=self::getNotificationSubject($varNotificationType,$varApplicationID);
        }
        
        $notificationModel->setIsNewRecord(true);
	$notificationModel->pkNotificationID = NULL;
        $notificationModel->notificationParentID = $varParentID;
        $notificationModel->notificationFrom = $varNotificationFrom;
        $notificationModel->fkEmployerID = $varEmployerID;
        $notificationModel->notificationSubject = $varNotificationSubject;
        $notificationModel->notificationBody = $varNotificationBody;
        $notificationModel->notificationType = $varNotificationType;
        $notificationModel->notificationAdminRead=$varNotificationAdminRead;
        $notificationModel->notificationEmployerRead=$varNotificationEmployerRead;
        
        if($notificationModel->save()){
            $notificationModel->notificationRootID=$notificationModel->primaryKey;
            if($notificationModel->save()){
                self::changeAssignmentStatus($varApplicationID,$varNotificationType);                
            }
        }
    }    
    
     /**
     * @param char $type the type of notification
     * @param int $varID the ID of Application 
     * @return char final subject for notification
     */
    protected function getNotificationSubject($type,$varID) {
        if($type==0){
            $subject= str_replace('{ID}',$varID,NOTIFICATION_ASSIGNMENT_REJECTED_ADMIN);
        }elseif($type==1){
            $subject= str_replace('{ID}',$varID,NOTIFICATION_ASSIGNMENT_PUBLISHED_ADMIN);
        }elseif($type==2){
            $subject= str_replace('{ID}',$varID,NOTIFICATION_ASSIGNMENT_PUBLISHED_ADMIN);
        }elseif($type==3){
            $subject= str_replace('{ID}',$varID,NOTIFICATION_ASSIGNMENT_REJECTED_ADMIN);
        }
        
        return $subject;
    }
    
    /**
     * @param char $varNotification the type of notification
     * @param int $varApplication the ID of Application 
     */
    protected function changeAssignmentStatus($varApplication,$varNotification) {
        $assignmentModel=new Assignment;
        //if($type==0){
            $assignmentModel->updateAll(array('assignmentStatus'=>$varNotification),'assignmentID="'.$varApplication.'"');
        //}elseif($type==1){
        //    $subject= str_replace('{ID}',$varID,NOTIFICATION_ASSIGNMENT_PUBLISHED_ADMIN);
        //}
    }
}
