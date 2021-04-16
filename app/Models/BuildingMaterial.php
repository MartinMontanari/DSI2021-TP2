<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BuildingMaterial extends Model
{
    use HasFactory;

    protected $table = 'building_materials';

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
    public function getMaterialType(): string
    {
        return $this->material_type;
    }

    /**
     * @param string $materialType
     */
    public function setMaterialType(string $materialType): void
    {
        $this->material_type = $materialType;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unit_price;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice(float $unitPrice): void
    {
        $this->unit_price = $unitPrice;
    }

    /**
     * @return HasOne
     */
    public function bag() : HasOne
    {
        return $this->hasOne(Bag::class);
    }

}
