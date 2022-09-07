<?php
/**
 * @Author TungND
 * @Date   Sep 07, 2022
 */

namespace Laravel\NganLuong\Traits;

use Laravel\NganLuong\Enums\PaymentStatus;

trait Payment
{
    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $redirectUrl;

    /**
     * @var string
     */
    public string $transactionId;

    /**
     * @var string
     */
    public string $createdAt;

    /**
     * @var string
     */
    public string $updatedAt;

    public function __construct()
    {

    }

    /**
     * @return bool
     */
    public function isCaptured(): bool
    {
        return $this->status == PaymentStatus::Captured;
    }

    /**
     * @return bool
     */
    public function isCanceled(): bool
    {
        return $this->status == PaymentStatus::Canceled;
    }

    /**
     * @return bool
     */
    public function isFailed(): bool
    {
        return $this->status == PaymentStatus::Failed;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->status == PaymentStatus::Success;
    }
}
