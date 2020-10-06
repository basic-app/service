<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Service;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

abstract class BaseService
{

    use LoggerAwareTrait {
        setLogger as setLoggerTrait;
    }

    public function __construct()
    {
        $this->setLogger(new NullLogger);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->setLoggerTrait($logger);

        return $this;
    }

}