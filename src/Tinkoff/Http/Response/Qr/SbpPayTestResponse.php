<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class SbpPayTestResponse extends ResponseAbstract
{
    private ?string $details = null;

    /**
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @param string|null $details
     * @return SbpPayTestResponse
     */
    public function setDetails(?string $details): SbpPayTestResponse
    {
        $this->details = $details;
        return $this;
    }

}
