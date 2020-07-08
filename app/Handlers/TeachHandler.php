<?php


namespace App\Handlers;

//use Illuminate\Support\Facades\Config;
//use Illuminate\Support\Facades\App;
//use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\MessageCenter;
//use Carbon\Carbon;
//use Exception;
//use Log;
//use Illuminate\Support\Facades\Storage;
use Hash;

class TeachHandler{
    
    public function storeTeacher($data){
        try{

            $user = new \App\Model\Users();
            $user->name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->address = $data['address'];
            $user->gender = $data['gender'];
            $user->state = $data['state'];
            $user->city = $data['city'];
            $user->birth_date = $data['birth_date'];
            $user->course = $data['course'];
            $user->contact_number = $data['contact_number'];
            $user->experience_period = $data['period'];
            $user->organization_address = $data['organization_address'];
            $user->designation = $data['designation'];
            $user->personal_achievements = $data['personal_achievements'];
            $user->description = $data['description'];
            $user->document = isset($data['document'])?$data['document']:Null;
        if($user->save()){
            return true;
        }
         return false;   
        } catch (Exception $ex) {
           throw $ex;
        }
    }
    
    public function getProfile($id){
        try{
           $user = \App\Model\Users::where([['id', $id]])->first();
           $userData = $user->toArray();
           return $userData;
        } catch (Exception $ex) {
           throw $ex;
        }
    }
    
    public function getStudent(){
        try{
            $students = \App\Model\Student::select('id', 'first_name', 'last_name', 'email', 'contact_number', 'group_id')->get();
            return $students->toArray();
        } catch (Exception $ex) {
             throw $ex;
        }
    }
    
    public function updateProfile($data){
        try{
            $user = \App\Model\Users::where([['id', $data['hidden_id']]])->first();
            if($user){
                $user->name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->email = $data['email'];
            $user->address = $data['address'];
           // $user->gender = $data['gender'];
            $user->state = $data['state'];
            $user->city = $data['city'];
            $user->birth_date = $data['birth_date'];
            //$user->course = $data['course'];
            $user->contact_number = $data['contact_number'];
            $user->experience_period = $data['experience_period'];
            $user->organization_address = $data['organization_address'];
            $user->designation = $data['designation'];
            //$user->personal_achievements = $data['personal_achievements'];
            $user->designation = $data['designation'];
            if($user->save()){
                return true;
            }
            }
            return false;
        }catch (Exception $ex) {
             throw $ex;
        }
    }
    
    public function getPayment($id){
        try{
          $students = \App\Model\Payment::where('teacher_id', $id)->get();
          return $students->toArray();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
