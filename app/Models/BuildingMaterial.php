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
     * @param int $layerThickness
     * @return float
     */
    public function getUnitPriceByCoverLayerThickness(int $layerThickness): float
    {
        switch ($layerThickness) {
            case 50:
                return $insulatingMaterialCost = 53.60;
            case 70:
                return $insulatingMaterialCost = 87.00;
            case 100:
                return $insulatingMaterialCost = 117.49;
            case 120:
                return $insulatingMaterialCost = 128.48;
            case 160:
                return $insulatingMaterialCost = 143.05;
            case 200:
                return $insulatingMaterialCost = 180.79;
            default:
                return 117.49;
        }
    }

    /**
     * @return HasOne
     */
    public function bag(): HasOne
    {
        return $this->hasOne(Bag::class);
    }

}
