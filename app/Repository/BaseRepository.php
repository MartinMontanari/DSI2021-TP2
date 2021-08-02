<?php

namespace App\Repository;


use App\Models\Item;

class BaseRepository
{
    public function save(Item $item){
        $item->save();
    }
}
