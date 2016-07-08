<?php
namespace App\Http\Controllers\Credential;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class CheckExistenceController extends Controller
{
    /**
     * @param $id
     * @return bool | checking the existence of data before delete
     */
    public function getCheckExistence($id, $arr = array())
    {
       if(count($arr) != null) {
           foreach($arr as $arr) {
               $data = $arr['model']::where($arr['foreign_key'], $id)->get();
                if(count($data) > 0) {
                    break;
                }
           }
           if(count($data) != 0) {
               $check = true;
           } else {
               $check = false;
           }

           return $check;
       }
    }
}