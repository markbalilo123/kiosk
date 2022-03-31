<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class TerminalController extends Controller
{
    public function getTerminal() {
        try {
            $query = DB::connection('sqlsrv')->select('
            SELECT "VehicleTypeID", "vehicle_name"
            FROM "tbl_vehicle_type"');

            // $query2 = DB::connection('sqlsrv')->select('
            // SELECT available_seat, timestamp, no_passenger, plate_no, seat_capacity, name, vehicle_name FROM tbl_sitexserver a left join tbl_vehicle b on a.VehicleID=b.VehicleID left join tbl_operator c on b.OperatorID=c.OperatorID left join tbl_vehicle_type d on c.VehicleTypeID=d.VehicleTypeID');
    
            // return Inertia::render('terminal2', ['vehicles' => $query, 'rides' => $query2]);

            return Inertia::render('terminal2', ['vehicles' => $query]);
        } catch (Throwable $e) {
            report($e);
     
            return false;
        }
    }
}
