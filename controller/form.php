<?php
/**
 * Created by PhpStorm.
 */
require_once 'model/config.php';

//form controller that initiates the different models
class formController
{

    private $configService = NULL;

    public function __construct()
    {
        $this->configService = new config();
    }

    public function homepage()
    {
        include "view/home.php";
    }


    public function showall()
    {
        try {
            $users = $this->configService->showall();
            return $users;
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
        //}
    }

    public function showError($title, $message)
    {
    }

    public function updateUsers()
    {

    }
}