<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of components
 *
 * @author wibiaristama
 */
class chatpanelComponents extends sfComponents {
  

     public function executeChatPanel()
    {
         $xmppPrebind =  new XmppPrebind('localhost.com','http://localhost:5280/http-bind','',false,false);
		    $user = $this->getUser()->getGuardUser()->getUsername();
		    $this->jabberid = $this->getUser()->getGuardUser()->getUsername();
		    $this->password = 'passworduser';
		  
		    $xmppPrebind->connect($this->jabberid,$this->password);
		    $xmppPrebind->auth();
		    $this->sessionInfo = $xmppPrebind->getSessionInfo();
        
    }
    //put your code here
}

?>
