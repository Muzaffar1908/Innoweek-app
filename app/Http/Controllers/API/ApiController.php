<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserTicket;
use App\Models\UserVisit;
//use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function checkTicket(Request $request)
    {
        $data = \Request::except(array('_token'));
        $inputs = $request->all();
        $dataID = $inputs['ticket_id'];

        $rule['ticket_id'] = 'required|string|max:255';

        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            $response = [
                'status' => 403,
                'success' => false,
                'message' => $validator->messages(),
            ];
            return response()->json($response, 403);
        }
        $ticket = UserTicket::select('u.id as user_id', 'user_tickets.id as ticket_id', 'u.first_name as first_name', 'u.last_name as last_name', 'u.created_at as registered_at')
            ->where('ticket_id', $dataID)
            ->leftJoin('users as u', 'user_tickets.user_id', '=', 'u.id')
            ->first();

        if ($ticket) {
            $response = [
                'status' => 201,
                'success' => true,
                'message' => "Ticket found on database",
                'data' => $ticket
            ];
            return response()->json($response, 201);
        }
        $response = [
            'status' => 404,
            'success' => false,
            'message' => "Data not found, try again",
        ];
        return response()->json($response, 404);
    }

    public function approveTicket(Request $request)
    {
        $data = \Request::except(array('_token'));
        $inputs = $request->all();
        $dataID = $inputs['ticket_id'];

        $rule['ticket_id'] = 'required|string|max:255';

        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            $response = [
                'status' => 403,
                'success' => false,
                'message' => $validator->messages(),
            ];
            return response()->json($response, 403);
        }

        $ticket = UserTicket::where('id', $dataID)->first();
        if ($ticket) {
            $visited = new UserVisit;
            $visited->user_id = 1;
            $visited->ticket_id = $ticket->id;
            $visited->save();
            $response = [
                'status' => 201,
                'success' => true,
                'message' => "Data saved successfully",
                'data' => $ticket
            ];
            return response()->json($response, 201);
        }
        $response = [
            'status' => 404,
            'success' => false,
            'message' => "Data not found, try again",
        ];
        return response()->json($response, 404);
    }
}
