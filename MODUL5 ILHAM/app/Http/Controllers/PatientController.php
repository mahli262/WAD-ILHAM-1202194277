<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Http\Request;

    class PatientController extends Controller
    {
        public function index(){
            $patients = Patient::all();
            return view('patient.patient', [
                'title' => 'Patient',
                'patients' => $patients
            ]);
        }

        public function vaccine_index(){
            $vaccines = Vaccine::all();
            return view('patient.list', [
                'title' => 'Patient',
                'vaccines' => $vaccines
            ]);
        }

        public function register_index(Vaccine $vaccine){
            return view('patient.insert_patient', [
                'title' => 'Patient',
                'vaccine' => $vaccine
            ]);
        }

        public function edit_index(Patient $patient){
            return view('patient.edit_patient', [
                'title' => 'Patient',
                'patient' => $patient
            ]);
        }

        public function store(Request $request){
            $data = $request->all();

            $data['image_ktp'] = $data['image_ktp'] ?? 'default.png';
            Patient::create($data);
            return redirect(route('patient.home-view'));
        }

        public function update(Request $request, Patient $patient){
            $data = $request->all();
            $data['image_ktp'] = $data['image_ktp'] ?? $patient->image_ktp; // sementara di hardcode.
            $patient->updateOrFail($data);
            return redirect(route('patient.home-view'));
        }

        public function destroy(Patient $patient){
            $patient->deleteOrFail();
            return redirect(route('patient.home-view'));
        }
    }
