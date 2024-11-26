<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'categories',
            [
                'allCats' => Category::where('active', 1)->paginate(10),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categorie)
    {
        $item = Category::find($categorie->id);

        $doctors = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();

        $requiredPermissions = $item->permissions;

        $res = User::whereJsonContains('permissions', json_encode($requiredPermissions))->get();

       $doctorsWithAccess = User::byAnyAccess([
            $res
        ])->get();

        $keys = Category::where('permissions->>1', '1')->pluck('permissions')->map(function ($permissions) {
            return array_keys(json_decode($permissions, true));
        })->flatten();
        
        $result = $keys->toArray();

        $requiredPermissions = collect($item->permissions)->filter(function($value) {
            return $value === '1';
        })->keys()->toArray();

        $doctors = User::where(function ($query) use ($requiredPermissions) {
            foreach ($requiredPermissions as $permission) {
                $query->whereJsonContains('permissions', [$permission => '1']);
            }
        })->get();

        $appointments = Appointment::whereDate('date', '>=', Carbon::now())
        ->whereTime('time', '>=', '08:00:00')
        ->whereTime('time', '<=', '20:00:00')
        ->get()->where('id_category', $categorie->id);
    
    $busyTimes = [];
    
    // Заполняем массив времен, когда записи уже есть
    foreach ($appointments as $appointment) {
        $appointmentDateTime = Carbon::parse($appointment->date . ' ' . $appointment->time);
        $busyTimes[] = $appointmentDateTime->format('H:i:s');
    }
    
    // Инициализируем массив свободных времен
    $freeTimes = [];
    
    // Генерируем свободные интервалы времени
    $currentDateTime = Carbon::now()->startOfHour()->setTime(8, 0, 0);
    $endOfDay = Carbon::now()->endOfDay()->setTime(20, 0, 0);
    
    while ($currentDateTime->addMinutes(30)->lte($endOfDay)) {
        $currentTime = $currentDateTime->copy()->format('H:i');
        $isFree = true;
    
        foreach ($busyTimes as $busyTime) {
            $diffInMinutes = Carbon::parse($currentTime)->diffInMinutes(Carbon::parse($busyTime));
            if ($diffInMinutes >= 0 && $diffInMinutes < 30) {
                $isFree = false;
                break;
            }
        }
    
        if ($isFree) {
            $freeTimes[] = $currentTime;
        }
    }
    
    return view('currentCategory', ['category' => $item, 'doctors' => $doctors, 'res' => $result, 'freeTimes' => $freeTimes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categorie)
    {
        //
    }
}
