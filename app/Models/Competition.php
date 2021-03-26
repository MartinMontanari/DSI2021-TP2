<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table = 'competitions';

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCompetitionDate(): string
    {
        return $this->competition_date;
    }

    /**
     * @param string $competitionDate
     */
    public function setCompetitionDate(string $competitionDate): void
    {
        $this->competition_date = $competitionDate;
    }

    /**
     * @return string
     */
    public function getInscriptionLimitDate(): string
    {
        return $this->inscription_limit_date;
    }

    /**
     * @param string $inscriptionLimitDate
     */
    public function setInscriptionLimitDate(string $inscriptionLimitDate): void
    {
        $this->inscription_limit_date = $inscriptionLimitDate;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }


    /**
     * @return array
     */
    public function getCompetitionData() : array
   {
        return [
            'name' => $this->getName(),
            'competitionDate' => $this->getCompetitionDate(),
            'inscriptionLimitDate' => $this->getInscriptionLimitDate(),
            'location' => $this->getLocation(),
            'distance' => $this->getDistance(),
        ];
    }

    /**
     * @return array
     */
    public function getPodiumTimes(): array
    {
        return $this->podium_times;
    }

    /**
     * @param array $podiumTimes
     */
    public function setPodiumTimes(array $podiumTimes): void
    {
        $this->podium_times = $podiumTimes;
    }
}
