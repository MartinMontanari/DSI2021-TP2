<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bag extends Model
{
    use HasFactory;

    protected $table = 'bags';

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
    public function getMaxLoadCapacity(): int
    {
        return $this->max_load_capacity;
    }

    /**
     * @param int $maxLoadCapacity
     */
    public function setMaxLoadCapacity(int $maxLoadCapacity): void
    {
        $this->max_load_capacity = $maxLoadCapacity;
    }

    /**
     * @return string
     */
    public function getWeightUnitType(): string
    {
        return $this->weight_unit_type;
    }

    /**
     * @param string $weightUnitType
     */
    public function setWeightUnitType(string $weightUnitType): void
    {
        $this->weight_unit_type = $weightUnitType;
    }

    /**
     * @return BelongsTo
     */
    public function buildingMaterial() : BelongsTo
    {
        return $this->belongsTo(BuildingMaterial::class);
    }

    /**
     * @return BuildingMaterial|null
     */
    public function getBuildingMaterial(): ?BuildingMaterial
    {
        return $this->buildingMaterial;
    }

    /**
     * @param BuildingMaterial $buildingMaterial
     */
    public function setBuildingMaterial(BuildingMaterial $buildingMaterial) : void
    {
        $this->buildingMaterial()->associate($buildingMaterial);
    }

    /**
     * @return HasOne
     */
    public function budget() : HasOne
    {
        return $this->hasOne(Budget::class);
    }
}
