<?php


namespace App\Services;


use App\Entity\Capitalize;
use App\Entity\Logger;
use App\Entity\Spaces;

class master
{
    private $logger;
    Private $transformer;

    /**
     * master constructor.
     * @param string $message
     * @param $logger
     * @param Transform $transformer
     */
    public function __construct(Logger $logger, Transform $transformer)
    {

        $this->logger = $logger;
        $this->transformer = $transformer;
    }

    public function log($message){
        $this->logger->Logging($message);
        $message=$this->transformer->Transform($message);
        return $message;
    }



}