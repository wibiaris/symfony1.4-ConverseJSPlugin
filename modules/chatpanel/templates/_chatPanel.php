 <link rel="stylesheet" type="text/css" href="<?php echo url_for('@homepage', true) ?>/conversejs/converse.css" />

  
<input type="hidden"  name="jid" id="jid" value="<?= $sessionInfo['jid'] ?>" >
<input type="hidden"  name="rid" id="rid" value="<?= $sessionInfo['rid'] ?>" >
<input type="hidden"  name="sid" id="sid"  value="<?= $sessionInfo['sid'] ?>" >

   <div id="chatpanel">
        <div id="collective-xmpp-chat-data"></div>
        <div id="toggle-controlbox">
            <a href="#" class="toggle-online-users">
                <strong class="conn-feedback">Click here to chat</strong> <strong style="display: none" id="online-count">(0)</strong>
            </a>
        </div>
    </div>