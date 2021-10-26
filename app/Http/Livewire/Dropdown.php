<?php

namespace App\Http\Livewire;

use App\Models\phoneNumber;
use App\Models\Student;
use Livewire\Component;

class Dropdown extends Component
{

    public $studentsList;
    public $phoneNumberList;

    public $studentId;
    public $name;
    public $dob;
    public $phone;



    public function studentsSelect()
    {
        $this->phoneNumberList = phoneNumber::where('student_id',$this->studentsList)->get();
//        dd($this);
    }

    public function addStudent()
    {
        Student::create([
           'student_name' => $this->name,
           'dob' => $this->dob
        ]);
        $this->name = '';
        $this->dob = '';
    }


    public function addContact(Student $student){

        $this->name = $student->student_name;

        phoneNumber::create([
           'student_id' => $student->id,
            'phone_number' => $this->phone
        ]);

//        $this->phone
//        dd($student);






    }

    public function editContact($id){

        session()->put('has',$id);
        $student = student::find($id);


        $this->studentId = $student->id;
        $this->name = $student->student_name;
        $this->dob = $student->dob;


    }

    public function updateContact(){

        $student = student::find(session('has'));



//dd($this->studentId);
//dd($this->name);
//dd($this->dob);
        $student->update([

        $student->id = $this->studentId,
        $student->student_name = $this->name ,
       $student->dob =  $this->dob ,

       ]);

    }






    public function render()
    {
        $student = Student::all();
        $phoneNumber = phoneNumber::all();

        return view('livewire.dropdown',compact('student','phoneNumber'))->extends('layouts.dashboard');
    }
}
