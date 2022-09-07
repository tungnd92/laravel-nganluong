<?php

namespace Laravel\NganLuong\Enums;

use BenSampo\Enum\Enum;

class PaymentStatus extends Enum
{
    const Created  = "created";
    const Captured = "captured";
    const Failed   = 'failed';
    const Canceled = 'canceled';
    const Success  = 'success';
}
