<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class MakeNewBudgetController extends Controller
{


    public function __invoke(Request $request)
    {

        $customerId = $request->input('customer_id');

        if(!is_null($customerId)){
            $customer = Customer::query()->where('id','=', $customerId)->get()->first();
            if(!isset($customer))
            {
                throw new \RuntimeException('El cliente no existe', 400);
            }
            $constructionSite = $customer->getBuildingUnderConstruction();
        }
    }
}
