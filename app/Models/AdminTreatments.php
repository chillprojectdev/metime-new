<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kreait\Firebase\Database as Firebase;
use Kreait\Firebase\Storage as Storage;
use Kreait\Firebase\Database\Transaction;
use Kreait\Firebase\Exception\Database\ReferenceHasNotBeenSnapshotted;
use Kreait\Firebase\Exception\Database\TransactionFailed;

class AdminTreatments extends Model
{
    use HasFactory;


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

    protected static function getKeyTreatment() {
        $database = app('firebase.database');

        $hasChildren = $database->getReference('treatments')->getSnapshot()->hasChildren();

        if($hasChildren) {
            $key = $database->getReference('treatments')->getChildKeys();

            return $key[count($key)-1];
        } else {
            return 0;
        }
    }

    protected static function createTreatment($data, $key) {
        $database = app('firebase.database');
        $storage = app('firebase.storage');
        $ref = $database->getReference("treatments/".$key);
        $message = null;
        $val = true;
        try {
            $database->runTransaction(function (Transaction $transaction) use ($ref, $data, $storage) {
                $ref->set([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'time' => $data['time']
                ]);

                $bucket = $storage->getBucket()->upload($data['img'], ['name' => "treatment/test1.jpg"]);


                //$transaction->set($ref, 'this will fail');
            });
            $message = 'Process Successed';
            $val = true; 
        } catch (ReferenceHasNotBeenSnapshotted $e) {

            $referenceInQuestion = $e->getReference();
        
            $val = false;
            $message = 'Process Failed :( '.$e->getMessage();
        } catch (TransactionFailed $e) {
            $referenceInQuestion = $e->getReference();
            $failedRequest = $e->getRequest();
            $failureResponse = $e->getResponse();

            $message = 'Process Failed :( '.$e->getMessage();
            $val = false;
        }
        $result = array(
            'message' => $message,
            'val' => $val
        );
        return $result;
    }

    protected static function updateTreatment($data) {
        $database = app('firebase.database');
        $ref = $database->getReference("treatments/".$data['uid']);
        $message = null;
        $val = true;
        try {
            $database->runTransaction(function (Transaction $transaction) use ($ref, $data) {
                $post = [
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'time' => $data['time']
                ];
                
                $updates = [
                    'treatments/'.$data['uid'] => $post
                ];

                $ref->update([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'time' => $data['time']
                ]);
            });
            $message = 'Process Successed';
            $val = true; 
        } catch (ReferenceHasNotBeenSnapshotted $e) {

            $referenceInQuestion = $e->getReference();
        
            $val = false;
            $message = 'Process Failed :( '.$e->getMessage();
        } catch (TransactionFailed $e) {
            $referenceInQuestion = $e->getReference();
            $failedRequest = $e->getRequest();
            $failureResponse = $e->getResponse();

            $message = 'Process Failed :( '.$e->getMessage();
            $val = false;
        }
        $result = array(
            'message' => $message,
            'val' => $val
        );
        return $result;
    }

    protected static function deleteTreatment($data) {
        $database = app('firebase.database');
        $ref = $database->getReference("treatments/".$data['uid']);
        $message = null;
        $val = true;
        try {
            $database->runTransaction(function (Transaction $transaction) use ($ref, $data) {
                $ref->remove();
            });
            $message = 'Process Successed';
            $val = true;
        } catch (ReferenceHasNotBeenSnapshotted $e) {

            $referenceInQuestion = $e->getReference();
        
            $val = false;
            $message = 'Process Failed :( '.$e->getMessage();
        } catch (TransactionFailed $e) {
            $referenceInQuestion = $e->getReference();
            $failedRequest = $e->getRequest();
            $failureResponse = $e->getResponse();

            $message = 'Process Failed :( '.$e->getMessage();
            $val = false;
        }
        $result = array(
            'message' => $message,
            'val' => $val
        );
        return $result;
    }
}
