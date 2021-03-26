<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table = 'inscriptions';

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
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getParticipantId(): int
    {
        return $this->participant_id;
    }

    /**
     * @param int $participantId
     */
    public function setParticipantId(int $participantId): void
    {
        $this->participant_id = $participantId;
    }

    /**
     * @return int
     */
    public function getCompetitionId(): int
    {
        return $this->competition_id;
    }

    /**
     * @param int $competitionId
     */
    public function setCompetitionId(int $competitionId): void
    {
        $this->competition_id = $competitionId;
    }

}
