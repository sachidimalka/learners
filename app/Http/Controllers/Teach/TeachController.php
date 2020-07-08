<?php

namespace App\Http\Controllers\Teach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class TeachController extends Controller
{
    public function registerTeacher(){
		try{
          return view('teach-register');
		}catch (Exception $ex) {
            throw $ex;
        }
	}
        
     public function addTeacher(Request $request){
         
         
          $validate = Validator::make($request->input(), [
                // 'first-name' => 'required|max:255',
                // 'last-name' => 'required|max:255',
           ]);
          if ($validate->fails()){
              return json_encode(array('success'=>false, 'message'=>$validate->errors()->first()));
          }
          $param = $request->input();
          $teachHandler = new \App\Handlers\TeachHandler();
          $teachHandler->storeTeacher($param);
         
        return json_encode(array('success'=>true, 'message'=>'Your Registration is successfully'));
         
     }
     
     public function profile(){
         try{
             $user = auth()->user();
             $id = $user->id;
             $teachHandler = new \App\Handlers\TeachHandler();
             $data = $teachHandler->getProfile($id);
             return view('profile', compact('data'));
         } catch (Exception $ex) {
            throw $ex;
         }
     }
     
     public function logout(){
         try{
            Auth::logout();
            return redirect('login');
         } catch (Exception $ex) {
             throw $ex;
         }
     }
     public function getCalendar(){
         try{
            return view('calendar'); 
         } catch (Exception $ex) {
             throw $ex;
         }
     }
     public function getStudent(){
         try{
            $teachHandler = new \App\Handlers\TeachHandler();
            $data = $teachHandler->getStudent();
            return view('student', compact('data'));
         } catch (Exception $ex) {
             throw $ex;
         }
     }
     public function getAttendance(){
         try{
            return view('attendance'); 
         } catch (Exception $ex) {
             throw $ex;
         }
     }
     public function getMyPayment(){
         try{
             $user = auth()->user();
             $id = $user->id;
             $teachHandler = new \App\Handlers\TeachHandler();
            $data = $teachHandler->getPayment($id);
            return view('my-payment', compact('data')); 
         } catch (Exception $ex) {
             throw $ex;
         }
     }
     
     public function addAtendance(Request $request){
         try{
             $validate = Validator::make($request->input(), [
                 'group' => 'required|string|max:10',
                 'class_date' => 'date_format:m/d/y|after:today',
           ]);
          if ($validate->fails()){
              return json_encode(array('success'=>false, 'message'=>$validate->errors()->first()));
          }
          $classDate = $request->input('class-date');
          $groupName = $request->input('group');
          $teachHandler = new \App\Handlers\TeachHandler();
          $data['data'] = $teachHandler->getStudent();
          $data['class_date'] = $classDate;
          $data['group_name'] = $groupName;
          return view('add-attendance', compact('data'));
         } catch (Exception $ex) {
            throw $ex;
         }
     }
     
     public function UpdateTeachProfile(Request $request){
         try{
             $param = $request->input();
             $teachHandler = new \App\Handlers\TeachHandler();
             $status = $teachHandler->updateProfile($param);
             if($status){
               return json_encode(array('success'=>true, 'message'=>'Successfully updated profile')); 
             }else{
                 return json_encode(array('success'=>false, 'message'=>'Profile update fail')); 
             }
             
         }catch (Exception $ex) {
            throw $ex;
         }
     }
}
