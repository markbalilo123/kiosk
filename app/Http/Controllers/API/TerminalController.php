<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerminalController extends Controller
{
    public function getServerTerminal() {
        try {
            $query2 = DB::connection('sqlsrv')->select('
            SELECT ServerID, available_seat, timestamp, no_passenger, plate_no, seat_capacity, name, vehicle_name, terminal_name, start_point, destination FROM tbl_sitexserver a left join tbl_vehicle b on a.VehicleID=b.VehicleID left join tbl_operator c on b.OperatorID=c.OperatorID left join tbl_vehicle_type d on c.VehicleTypeID=d.VehicleTypeID left join tbl_terminal e on c.OperatorID=e.OperatorID');
    
            $response = response()->json($query2, 201);
            return $response;
        } catch (Throwable $e) {
            report($e);
            return response()->json(["message" => $ex->getMessage()], 500);
          //  return false;
        }
    }
}
