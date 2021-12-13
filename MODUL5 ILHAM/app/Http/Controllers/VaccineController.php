<?php

namespace App\Http\Controllers;

    use App\Http\Requests\VaccineStoreRequest;
    use App\Models;
use App\Models\Vaccine;
use Illuminate\Http\Request;

    class VaccineController extends Controller
    {
        // START VIEW METHOD
        public function index(){
            $vaccines = Vaccine::all();
            return view('vaccine.vaccine', [
                "title" => "Vaccine",
                "vaccines" => $vaccines
            ]);
        }

        public function add_index(){
            return view('vaccine.insert_vaccine', [
                "title" => "Vaccine",
            ]);
        }

        public function edit_index(Vaccine $vaccine){
            return view('vaccine.edit_vaccine', [
                "title" => "Vaccine",
                "vaccine" => $vaccine
            ]);
        }
        //END VIEW

        // START BUSSINESS LOGIC
        public function store(Request $request){
            $data = $request->all();

            $data['image'] = $data['image'] ?? 'default.png';
            Vaccine::create($data);
            return redirect(route('vaccine.home-view'));
        }

        public function update(Request $request, Vaccine $vaccine){
            $data = $request->all();

            $data['image'] = $vaccine->image;
            $vaccine->updateOrFail($data);
            return redirect(route('vaccine.home-view'));
        }

        public function destroy(Vaccine $vaccine){
            $vaccine->patients()->delete();
            $vaccine->deleteOrFail();
            return redirect(route('vaccine.home-view'));
        }
        // END BUSSINESS LOGIC
    }
