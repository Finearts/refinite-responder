<?php

class Subscriber{
	public $id               = null;
	public $responderID      = null;
	public $receivedMessages = '';
	public $emailAddress     = '';
	public $timeJoined       = 0;
	public $firstName        = '';
	public $lastName         = '';
	public $referralSource   = '';
	public $confirmed        = false;
	public $lastActivity     = 0;

	/**
	 *	List all available subscribers
	*/
	public static function listAll(){
		$db = PdoDb::getInstance();
		$query = $db->prepare("SELECT SubscriberID, ResponderID, SentMsgs, EmailAddress, TimeJoined, LastActivity, FirstName, LastName, ReferralSource, Confirmed FROM infresp_subscribers");
		$query->execute();
		$subscribers = array();
		while($result = $query->fetch(PDO::FETCH_ASSOC)){
			$subscribers[] = self::createFromResult($result);
		}
		return $subscribers;
	}

	/**
	 *	Get a specific subscriber
	 *	@param int $id Subscriber to be retrieved
	*/
	public static function getById($id){
		$db = PdoDb::getInstance();
		$query = $db->prepare("SELECT SubscriberID, ResponderID, SentMsgs, EmailAddress, TimeJoined, LastActivity, FirstName, LastName, ReferralSource, Confirmed FROM infresp_subscribers WHERE SubscriberID = :id");
		$query->execute(array("id"=>$id));
		return  self::createFromResult($query->fetch(PDO::FETCH_ASSOC));
	}

	/**
	 *	Used for easily creating subscriber objects from sql results
	 *	@param Array $result SQL result set containing subscriber information
	*/
	protected static function createFromResult(Array $result){
		$subscriber = new Subscriber();
		$subscriber->id               = $result['SubscriberID'];
		$subscriber->responderID      = $result['ResponderID'];
		$subscriber->receivedMessages = $result['SentMsgs'];
		$subscriber->emailAddress     = $result['EmailAddress'];
		$subscriber->timeJoined       = $result['TimeJoined'];
		$subscriber->firstName        = $result['FirstName'];
		$subscriber->lastName         = $result['LastName'];
		$subscriber->referralSource   = $result['ReferralSource'];
		$subscriber->confirmed        = (bool) $result['Confirmed'];
		$subscriber->lastActivity     = $result['LastActivity'];
		return $subscriber;
	}

	public function getMessages(){
		$messages = array();
		$messageList = explode(',', $this->receivedMessages);
		foreach($messageList as $messageID){
			$messages[] = Message::getByID($messageID);
		}
		return $messages;
	}
}