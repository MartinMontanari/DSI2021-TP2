<?php


namespace App\Models;


class SeederData
{
    /**
     * @return array[]
     */
    public static function getCompetitions(): array
    {
        return [
            [
                'name' => '25 km de San Francisco',
                'competitionDate' => '12/01/2020',
                'inscriptionLimitDate' => '11/01/2020',
                'location' => 'San Francisco - Córdoba',
                'distance' => 25,
            ],
            [
                'name' => '25 km de Freyre',
                'competitionDate' => '12/02/2020',
                'inscriptionLimitDate' => '11/02/2020',
                'location' => 'Feyre - Córdoba',
                'distance' => 25,
            ],
            [
                'name' => '35 km de Rafaela',
                'competitionDate' => '12/03/2020',
                'inscriptionLimitDate' => '11/03/2020',
                'location' => 'Rafaela - Santa Fe',
                'distance' => 35,
            ],
            [
                'name' => '35 km de Santa Fe',
                'competitionDate' => '12/04/2020',
                'inscriptionLimitDate' => '11/04/2020',
                'location' => 'Santa Fe - Santa Fe',
                'distance' => 35,
            ],
            [
                'name' => '35 km de Paraná',
                'competitionDate' => '12/05/2020',
                'inscriptionLimitDate' => '11/05/2020',
                'location' => 'Paraná - Entre Ríos',
                'distance' => 35,
            ],
            [
                'name' => '50 km de Bahía blanca',
                'competitionDate' => '12/06/2020',
                'inscriptionLimitDate' => '11/06/2020',
                'location' => 'Bahía blanca - Buenos Aires',
                'distance' => 50,
            ],
            [
                'name' => '50 km de Tandil',
                'competitionDate' => '12/07/2020',
                'inscriptionLimitDate' => '11/07/2020',
                'location' => 'Tandil - Buenos Aires',
                'distance' => 50,
            ],
            [
                'name' => '50 km de Córdoba',
                'competitionDate' => '12/08/2020',
                'inscriptionLimitDate' => '11/08/2020',
                'location' => 'Córdoba - Córdoba',
                'distance' => 50,
            ],
            [
                'name' => '50 km Carlos Paz',
                'competitionDate' => '12/09/2020',
                'inscriptionLimitDate' => '11/09/2020',
                'location' => 'Carlos Paz - Córdoba',
                'distance' => 50,
            ],
            [
                'name' => '50 km Salta',
                'competitionDate' => '12/10/2020',
                'inscriptionLimitDate' => '11/10/2020',
                'location' => 'Salta - Salta',
                'distance' => 50,
            ],
            [
                'name' => '50 km Tucumán',
                'competitionDate' => '12/11/2020',
                'inscriptionLimitDate' => '11/11/2020',
                'location' => 'Tucumán - Tucumán',
                'distance' => 50,
            ],
            [
                'name' => '50 km Resistencia',
                'competitionDate' => '12/12/2020',
                'inscriptionLimitDate' => '11/12/2020',
                'location' => 'Resistencia - Chaco',
                'distance' => 50,
            ],
        ];
    }

    /**
     * @return array
     */
    public static function getParticipants() : array
    {
        return [
            [
                'fullName' => 'Juan Pérez',
                'email' => 'juanperez@mail.com',
                'phoneNumber' => '123456789',
                'bornDate' => '30/06/1991',
                'sex' => 'male',
            ],
            [
                'fullName' => 'Pepe Argento',
                'email' => 'pepeArgento@mail.com',
                'phoneNumber' => '231654978',
                'bornDate' => '12/05/1971',
                'sex' => 'male',
            ],
            [
                'fullName' => 'Moni Argento',
                'email' => 'moniArgento@mail.com',
                'phoneNumber' => '123654987',
                'bornDate' => '10/01/1975',
                'sex' => 'female',
            ],
            [
                'fullName' => 'Jorge Barili',
                'email' => 'jorge.barili@mail.com',
                'phoneNumber' => '123456789',
                'bornDate' => '01/09/1980',
                'sex' => 'male',
            ],
            [
                'fullName' => 'Alejandro Marley',
                'email' => 'ale.maerley@mail.com',
                'phoneNumber' => '2351456789',
                'bornDate' => '11/03/1973',
                'sex' => 'male',
            ],
            [
                'fullName' => 'Esteban Quito',
                'email' => 'esteban_quito@mail.com',
                'phoneNumber' => '999987845',
                'bornDate' => '5/04/1976',
                'sex' => 'male',
            ],
            [
                'fullName' => 'Florencia Peña',
                'email' => 'flor_peña@mail.com',
                'phoneNumber' => '11112225554',
                'bornDate' => '05/11/1980',
                'sex' => 'female',
            ]
        ];
    }
}
