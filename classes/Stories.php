<?php
include_once(__DIR__ . "/Db.php");
class Stories{

    // ---------- VARIABLES ---------- //
    private $name;
    private $message;

    // ---------- FUNCTIONS ---------- //
    public static function getAllStories(){
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM racism.stories");

        $statement->execute();
        $stories = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $stories;
    }

    public static function getStoryById($id){
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM racism.stories where id = :id");
        $statement->bindValue(":id", $id);

        $statement->execute();
        $story = $statement->fetch(PDO::FETCH_ASSOC);

        return $story;
    }

    public function addStory($name, $message){
        $conn = Db::getConnection();
        $statement = $conn->prepare("INSERT into stories (name, message) values (:name, :message)");
        $statement->bindValue(":name", $name);
        $statement->bindValue(":message", $message);

        $result = $statement->execute();
        return $result;
    }
    
    // ----- GETTERS AND SETTERS ----- //

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}