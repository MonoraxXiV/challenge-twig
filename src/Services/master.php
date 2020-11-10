<?php


namespace App\Services;


use App\Entity\Capitalize;
use App\Entity\Logger;
use App\Entity\Spaces;

class master
{
    private string $message;
    private $logger;
    Private $capitalizer;

    /**
     * master constructor.
     * @param string $message
     * @param $logger
     * @param $capitalizer
     */
    public function __construct(string $message, Logger $logger, Capitalize $capitalizer)
    {
        $this->message = $message;
        $this->logger = $logger;
        $this->capitalizer = $capitalizer;
    }

    public function log(){
        $this->logger->Logging($_POST['input']);
    }


}