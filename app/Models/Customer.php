<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'Customers';

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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
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
     * @return BelongsTo
     */
    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return Company|null
     */
    public function getCompany() : ?Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company) : void
    {
        $this->company()->associate($company);
    }

    /**
     * @return BelongsTo
     */
    public function buildingUnderConstruction() : BelongsTo
    {
        return $this->belongsTo(BuildingUnderConstruction::class);
    }

    /**
     * @return BuildingUnderConstruction|null
     */
    public function getBuildingUnderConstruction() : ?BuildingUnderConstruction
    {
        return $this->buildingUnderConstruction;
    }

    /**
     * @param BuildingUnderConstruction $buildingUnderConstruction
     */
    public function setBuildingUnderConstruction(BuildingUnderConstruction $buildingUnderConstruction) : void
    {
        $this->company()->associate($buildingUnderConstruction);
    }

    /**
     * @return HasOne
     */
    public function budget() : HasOne
    {
        return $this->hasOne(Budget::class);
    }
}
