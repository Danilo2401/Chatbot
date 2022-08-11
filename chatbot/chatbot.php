<?php

require "database.php";


Class Chatbot extends Database{

    public $message;

    public function ReadMessage($message){
        
        $this->message = $message;

        $query = "SELECT * FROM chatbot.chat WHERE message LIKE '%$this->message' ";

        $readQuery = parent::SetConn()->prepare($query);

        $readQuery->execute();

        if ($readQuery->rowCount() > 0) {
        
            while($red = $readQuery->fetch(PDO::FETCH_ASSOC)){
                
                echo $red["response"];
            }

        }else{
            echo "Sorry,I can't understand you!";
        }

    }


}


?>