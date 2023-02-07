<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class Member
{
    private string $memberId;

    private string $memberName;

    private bool $isPayee;

    public function __construct(array $data)
    {
        foreach ($data as $name => $value) {
            $method = 'set'.ucfirst($name);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return string
     */
    public function getMemberId(): string
    {
        return $this->memberId;
    }

    /**
     * @param string $memberId
     * @return Member
     */
    public function setMemberId(string $memberId): Member
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberName(): string
    {
        return $this->memberName;
    }

    /**
     * @param string $memberName
     * @return Member
     */
    public function setMemberName(string $memberName): Member
    {
        $this->memberName = $memberName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPayee(): bool
    {
        return $this->isPayee;
    }

    /**
     * @param bool $isPayee
     * @return Member
     */
    public function setIsPayee(bool $isPayee): Member
    {
        $this->isPayee = $isPayee;
        return $this;
    }

}
