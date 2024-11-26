<?php

namespace App\Http\Controllers;

use App\Mail\SendMDnotification;
use App\Models\Appointment;
use App\Models\User;
use App\Notifications\AppointmentSendMD;
use App\Notifications\GetAppointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $research = new Appointment();
        $research->id_user = $request->input('iduser');
        $research->id_category = $request->input('id_cat');

        $research->date = $request->input('date');
        $research->time = $request->input('time');

        $research->id_doctor = $request->input('MD');

        $research->save();

        //     // Найти пользователя по id
        // $user = User::find($request->input('MD'));
        // $user_patient = User::find($request->input('iduser'));

        // // Проверить, что пользователь найден и отправить уведомление
        // if($user) {
        //     // Отправить уведомление через Mailgun
        //     Mail::to($user->email)->send(new SendMDnotification($user->email, $user->name, $user_patient->name, $user_patient->surname, $request->input('date'), $request->input('time')));
        // }
    

    
        return redirect()->route('lk')->with('success', 'Research created successfully');
    }
}
