<?php

namespace ActiveCollab\Exec\Adapter;

use Ssh\Session;

/**
 * @package ActiveCollab\Exec\Adapter
 */
class RemoteAdapter extends Adapter
{
    /**
     * @var Session
     */
    private $ssh_session;

    /**
     * @param Session $ssh_session
     */
    public function __construct(Session $ssh_session)
    {
        $this->ssh_session = $ssh_session;
    }
}