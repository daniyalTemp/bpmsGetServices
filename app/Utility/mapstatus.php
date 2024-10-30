<?php

namespace App\Utility;

class mapstatus
{
    public $provinceId='';
    public $statusId='';

    /**
     * @param string $provinceId
     * @param string $statusId
     */
    public function __construct(string $provinceId, string $statusId)
    {
        $this->provinceId = $provinceId;
        $this->statusId = $statusId;
    }


}
