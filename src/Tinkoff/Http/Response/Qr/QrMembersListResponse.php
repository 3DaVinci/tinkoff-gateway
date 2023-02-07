<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class QrMembersListResponse extends ResponseAbstract
{
    private array $members = [];

    /**
     * @return array
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @param array $members
     * @return QrMembersListResponse
     */
    public function setMembers(array $members): QrMembersListResponse
    {
        $this->members = $members;
        return $this;
    }
}
