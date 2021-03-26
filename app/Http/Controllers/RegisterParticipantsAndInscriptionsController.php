<?php

namespace App\Http\Controllers;

use App\Enums\InscriptionStatus;
use App\Models\Competition;
use App\Models\Inscription;
use App\Models\Participant;
use App\Models\SeederData;

class RegisterParticipantsAndInscriptionsController extends Controller
{

    /**
     * @param SeederData $data
     */
    public function __invoke(SeederData $data)
    {
        //Seed database.
        $this->createCompetitions($data->getCompetitions());
        $this->createParticipant($data->getParticipants());

        //Init params
        $competitions = Competition::all();
        $participants = Participant::all();

        $this->createInscriptions($competitions, $participants);
        $inscriptions = Inscription::all();

        $this->setPodiumTimesPerCompetition($competitions, $inscriptions);
//        $this->calculateFinalPodium($inscriptions);
    }

    /**
     * @param array $data
     */
    private function createCompetitions(array $data): void
    {
        foreach ($data as $item) {
            $competition = new Competition();

            $competition->setName($item['name']);
            $competition->setCompetitionDate($item['competitionDate']);
            $competition->setInscriptionLimitDate($item['inscriptionLimitDate']);
            $competition->setLocation($item['location']);
            $competition->setDistance($item['distance']);

            $competition->save();
        }
    }

    /**
     * @param array $data
     */
    private function createParticipant(array $data): void
    {
        foreach ($data as $item) {
            $participant = new Participant();

            $participant->setFullName($item['fullName']);
            $participant->setEmail($item['email']);
            $participant->setPhoneNumber($item['phoneNumber']);
            $participant->setBornDate($item['bornDate']);
            $participant->setSex($item['sex']);

            $participant->save();
        }
    }

    /**
     * @param $competitions
     * @param $participants
     */
    private function createInscriptions($competitions, $participants): void
    {
        foreach ($competitions as $competition) {
            for ($item = 0; $item < count($participants); $item++) {
                $inscription = new Inscription();
                $inscription->setCompetitionId($competition->getId());
                $participant = Participant::query()->where('id', '=', rand(1, 7))->get()->first();
                $inscription->setParticipantId($participant->getId());
                $inscription->setStatus(InscriptionStatus::PARTICIPATED);
                $inscription->save();
            }
        }
    }

//    TODO calcular los podios por competencia
    private function setPodiumTimesPerCompetition($competitions, $inscriptions): void
    {
        foreach ($inscriptions as $inscription) {
            $time = explode(' ', strftime(now() . time()));
            $inscription->setTime($time[1]);
            $inscription->save();
        }

        foreach ($competitions as $competition) {
            $first = 0;
            $second = 0;
            $third= 0;
            for ($item = 0; $item < count($inscriptions); $item++) {
                if ($inscriptions[$item]->getCompetitionId() == $competition->getId()) {
                    //TODO terminar de evaluar.
                }
            }
        }

    }

//    TODO terminar con el podio final
    public function getFinalSeasonPodiumsAndTimes()
    {

    }
}
