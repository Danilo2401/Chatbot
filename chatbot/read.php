<?php

require "chatbot.php";

$chatbot = new Chatbot();

$chatbot->ReadMessage($_POST["messageUser"]);

?>