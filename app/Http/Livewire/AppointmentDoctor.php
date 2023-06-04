<?php

namespace App\Http\Livewire;

use App\Models\DoctorOrder;
use App\Models\Service;
use App\Models\Time;
use App\Models\User;
use Livewire\Component;

class AppointmentDoctor extends Component
{
    public $chech_date;
    public $dates;
    public $services;
    public $service_id;
    public $doctors_order;
    public $doctors;
    public $doctor_id;
    public $day;

    public function day_change()
    {
        $this->doctors_order = DoctorOrder::where('doctor_id', $this->doctor_id)->pluck('time_id');
        if ($this->doctors_order->isNotEmpty()) {
            $this->dates = Time::whereNotIn('id', $this->doctors_order)->get();
        } else {
            $this->dates = Time::all();
        }
    }

    public function mount()
    {
        $this->doctor_id = 1;
        $this->services = Service::all();
        $this->doctors = User::where('type', 2)->get();
        $this->doctors_order = DoctorOrder::where('doctor_id', $this->doctor_id)->pluck('time_id');
        if ($this->doctors_order->isNotEmpty()) {
            $this->dates = Time::whereNotIn('id', $this->doctors_order)->get();
        } else {
            $this->dates = Time::all();
        }
    }

    public function render()
    {
        return view('livewire.appointment-doctor');
    }
}
