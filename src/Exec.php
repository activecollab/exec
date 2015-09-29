<?php

namespace ActiveCollab\Exec;

use ActiveCollab\Exec\Adapter\AdapterInterface;

/**
 * @package ActiveCollab\Exec
 */
final class Exec
{
    /**
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
}