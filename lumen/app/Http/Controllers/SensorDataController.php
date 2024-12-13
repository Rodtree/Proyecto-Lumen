<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData; // Importa el modelo

class SensorDataController extends Controller
{
    public function store(Request $request)
    {
        // Validar que los datos están presentes
        $this->validate($request, [
            'velocidad' => 'required|numeric',
            'distancia' => 'required|numeric'
        ]);

        // Crear el registro en la base de datos usando el modelo
        $sensorData = SensorData::create([
            'velocidad' => $request->input('velocidad'),
            'distancia' => $request->input('distancia')
        ]);

        // Devolver una respuesta JSON de confirmación
        return response()->json([
            'status' => 'success',
            'data' => $sensorData
        ]);
    }
    public function index()
{
    $sensorData = SensorData::all(); // Obtiene todos los registros de la base de datos
    return response()->json($sensorData);
}

}