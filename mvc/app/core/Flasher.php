<?php
class Flasher {
    /**
     * @param $message for alert message
     * @param $action for define action you trigger
     * @param $type for define alert type
     * @return void
     */
    public static function setFlash(string $message, string $action, string $type): void
    {
        $_SESSION["flash"] = [
            "message" => $message,
            "action" => $action,
            "type" => $type,
        ];
    }

    public static function flash():void
    {
        if(isset($_SESSION["flash"])){
            echo '<div class="alert alert-'. $_SESSION["flash"]["type"] .' alert-dismissible fade show" role="alert">
                    Student Data <strong>'. $_SESSION["flash"]["message"] .'</strong> '. $_SESSION["flash"]["action"] .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
            unset($_SESSION["flash"]);
        }
    }
}