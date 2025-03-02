<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromArray
{
    /**
    * @return array
    */
    public function array():array
    {
        $list=[];
        $users = User::all();
        foreach ($users as $user) {
            $list[] = [ $user->name , $user->email, $user->password];

        }
        return $list;
    }
}
