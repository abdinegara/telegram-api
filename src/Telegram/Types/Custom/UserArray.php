<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types\Custom;

use Psr\Log\LoggerInterface;
use unreal4u\TelegramAPI\Abstracts\TraversableCustomType;
use unreal4u\TelegramAPI\InternalFunctionality\TelegramResponse;
use unreal4u\TelegramAPI\Telegram\Types\User;

/**
 * Mockup class to generate a real telegram update representation
 */
class UserArray extends TraversableCustomType
{
    public function __construct(array $data = null, LoggerInterface $logger = null, TelegramResponse $response = null)
    {
        if (count($data) !== 0) {
            foreach ($data as $id => $chatMember) {
                $this->data[$id] = new User($chatMember, $logger);
            }
        }

        parent::__construct(null, $logger, $response);
    }
}
