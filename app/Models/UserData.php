<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kreait\Firebase\Database as Firebase;

class UserData extends Model
{
    use HasFactory;


    protected static function createUser($uid, $data) {
        $database = app('firebase.database');
        $database->getReference("customers/".$uid)
        ->set([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'no_hp' => $data['no_hp'],
        ]);
    }

    protected static function getUserProfile($uid) {
        $database = app('firebase.database');

        $reference = $database->getReference("customers/".$uid);
        $value = $reference->getSnapshot()->getValue();

        return $value;
    }

    protected static function getUserInternal($uid) {
        $database = app('firebase.database');

        $reference = $database->getReference("user/pegawai/".$uid);
        $value = $reference->getSnapshot()->getValue();

        return $value;
    }

    protected static function getAllCustomersCount() {
        $database = app('firebase.database');

        $reference = $database->getReference("customers");
        $value = $reference->getSnapshot()->numChildren();
        return $value;
    }
}
