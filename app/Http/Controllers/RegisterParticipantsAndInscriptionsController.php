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
        $this->createCompetitions($data->getCompetitions());
        $this->createParticipant($data->getParticipants());
        $this->createInscriptions();
    }

    public function createCompetitions($data) : void
    {
        foreach ($data as $item)
        {
            $competition = new Competition();

            $competition->setName($item['name']);
            $competition->setCompetitionDate($item['competitionDate']);
            $competition->setInscriptionLimitDate($item['inscriptionLimitDate']);
            $competition->setLocation($item['location']);
            $competition->setDistance($item['distance']);

            $competition->save();
        }
    }

    public function createParticipant($data) : void
    {
        foreach ($data as $item)
        {
            $participant = new Participant();

            $participant->setFullName($item['fullName']);
            $participant->setEmail($item['email']);
            $participant->setPhoneNumber($item['phoneNumber']);
            $participant->setBornDate($item['bornDate']);
            $participant->setSex($item['sex']);

            $participant->save();
        }
    }

    public function createInscriptions() : void
    {
        $competitions = Competition::all();
        $participants = Participant::all();

        foreach ($competitions as $competition)
        {
            $inscription = new Inscription();
            $inscription->setCompetitionId($competition->getId());
            foreach ($participants as $participant)
            {
                $inscription->setParticipantId($participant->getId());
                $inscription->setStatus(InscriptionStatus::PARTICIPATED);
                $inscription->save();
//                TODO terminar relaciones
            }
        }


    }

//    TODO calcular los podios por competencia

//    TODO terminar con el podio final
    public function getFinalSeasonPodiumsAndTimes()
    {

    }
}
