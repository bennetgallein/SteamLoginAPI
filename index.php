<?php

require 'steamlogin.php';

if (!isset($_SESSION['steamid'])) {
    loginbutton();
} else {
    include 'userInfo.php';
    logoutbutton();
    echo "<br>SteamID:". $steamprofile['steamid'];
    echo "<br>CommunityVisibilityState:". $steamprofile['communityvisibilitystate'];
    echo "<br>Profilestate:". $steamprofile['profilestate'];
    echo "<br>Personaname:". $steamprofile['personaname'];
    echo "<br>Last logoff:". $steamprofile['lastlogoff'];
    echo "<br>profileURL:". $steamprofile['profileurl'];
    echo "<br>Avatar:". $steamprofile['avatar'];
    echo "<br>Medium Avatar:". $steamprofile['avatarmedium'];
    echo "<br>Full Avatar:". $steamprofile['avatarfull'];
    echo "<br>Personastate:". $steamprofile['personastate'];
    echo "<br>Realname:". $steamprofile['realname'];
    echo "<br>Primary Clan ID:". $steamprofile['primaryclanid'];
    echo "<br>Time created:". $steamprofile['timecreated'];
    echo "<br>Uptodate:". $steamprofile['uptodate'];
}

?>