<?php

namespace App\Jobs;

use App\Mail\SendAppointmentReminder;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class AppointmentReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Получение списка записей обследований, которые находятся за 1 час до текущего времени
        $appointments = Appointment::whereRaw('CONCAT(date, " ", time) < ?', [now()->addHour()->toDateTimeString()])->get();

        // Обработка каждой записи обследования
        foreach ($appointments as $appointment) {
            // Получение списка пациентов, связанных с записью обследования
            $patients = User::where('id', $appointment->id_user)->get();
            $researchs = Category::where('id', $appointment->id_category)->get();
            

            // Отправка напоминания каждому пациенту
            foreach ($patients as $patient) {
                Mail::to($patient->email)->send(new AppointmentReminder($patient->name, $patient->surname));
            }
        }
    }
}
