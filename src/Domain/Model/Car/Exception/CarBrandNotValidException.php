<?php

declare(strict_types = 1);

namespace App\Domain\Model\User\Exception;

final class CarBrandNotValidException extends \Exception
{
    public function __construct($brand)
    {
        parent::__construct('Car brand is not valid: ' . $brand);
    }
}
