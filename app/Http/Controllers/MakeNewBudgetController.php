<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Budget;
use App\Models\BuildingMaterial;
use App\Models\Customer;
use Illuminate\Http\Request;

class MakeNewBudgetController extends Controller
{

    public function __invoke(Request $request)
    {

        $customerId = $request->input('customerId');

        if (is_null($customerId)) {
            throw new \InvalidArgumentException('El cliente ingresado es incorrecto.', 400);
        }
        try {
            $customer = $this->findCustomerByIdOrFail($customerId);

            $layerThickness = $request->input('layerThickness');
            $materialId = $request->input('materialId');

            if(is_null($materialId)){
                throw new \InvalidArgumentException('El material de construcción ingresado es incorrecto.', 400);
            }

            $buildingMaterialBag = $this->findMaterialBagByBuildingMaterialIdOrFail($materialId);


            $createdBudget = $this->createBudget($customer, $layerThickness, $buildingMaterialBag);

        } catch (\InvalidArgumentException $error) {
            return redirect()->back()->withErrors($error->getMessage());
        }
    }

    /**
     * @param int $customerId
     * @return Customer|null
     */
    private function findCustomerByIdOrFail(int $customerId): ?Customer
    {
        $query = Customer::query()->where('id', '=', $customerId)->get()->first();

        if (!isset($query)) {
            throw new \RuntimeException('El cliente no existe.', 404);
        }

        return $query;
    }

    /**
     * @param int $materialId
     * @return BuildingMaterial|null
     */
    private function findMaterialBagByBuildingMaterialIdOrFail(int $materialId): ?Bag
    {
        $query = Bag::query()->where('building_material_id', '=', $materialId)->get()->first();

        if (!isset($query)) {
            throw new \RuntimeException('La bolsa de aislante no existe.', 404);
        }

        return $query;
    }

    /**
     * @param Customer $customer
     * @param int $layerThickness
     * @param Bag $buildingMaterialBag
     * @return Budget
     */
    private function createBudget(Customer $customer, int $layerThickness, Bag $buildingMaterialBag): Budget
    {
        $budget = new Budget();

        $budget->setCustomer($customer);
        $budget->setLayerThickness($layerThickness);
        $budget->setBag($buildingMaterialBag);
        $budget->set
        //TODO terminar ésto.
    }
}
