<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->full_name;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->full_name = $fullName;
    }

    /**
     * @return string
     */
    public function getBillingAddress(): string
    {
        return $this->billing_address;
    }

    /**
     * @param string $billingAddress
     */
    public function setBillingAddress(string $billingAddress): void
    {
        $this->billing_address = $billingAddress;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phone_number = $phoneNumber;
    }

    /**
     * @return HasMany
     */
    public function customer() : HasMany
    {
        return $this->hasMany(Customer::class);
    }

}
