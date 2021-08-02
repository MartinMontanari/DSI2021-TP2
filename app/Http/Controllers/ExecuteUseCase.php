<?php

namespace App\Http\Controllers;

use App\Repository\FormsRepository;

class ExecuteUseCase
{
    private $FormsRepository;

    public function __construct(FormsRepository $formsRepository)
    {
        $this->FormsRepository = $formsRepository;
    }

    public function __invoke()
    {
        $this->FormsRepository->save();
    }
}
