<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Budget extends Model
{
    use HasFactory;

    protected $table = 'budgets';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getLayerThickness(): int
    {
        return $this->layer_thickness;
    }

    /**
     * @param int $layer_thickness
     */
    public function setLayerThickness(int $layerThickness): void
    {
        $this->layer_thickness = $layerThickness;
    }

    /**
     * @return int
     */
    public function getTotallyBagsQuantity(): int
    {
        return $this->totally_bags_quantity;
    }

    /**
     * @param int $totallyBagsQuantity
     */
    public function setTotallyBagsQuantity(int $totallyBagsQuantity): void
    {
        $this->totally_bags_quantity = $totallyBagsQuantity;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expiration_date;
    }

    /**
     * @param string $expirationDate
     */
    public function setExpirationDate(string $expirationDate): void
    {
        $this->expiration_date = $expirationDate;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return BelongsTo
     */
    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * @return Customer|null
     */
    public function getCustomer() : ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer) : void
    {
        $this->customer()->associate($customer);
    }

    /**
     * @return BelongsTo
     */
    public function bag() : BelongsTo
    {
        return $this->belongsTo(Bag::class);
    }

    /**
     * @return Customer|null
     */
    public function getBag() : ?Bag
    {
        return $this->bag;
    }

    /**
     * @param Bag $bag
     */
    public function setBag(Bag $bag) : void
    {
        $this->customer()->associate($bag);
    }

}
