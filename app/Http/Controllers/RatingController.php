<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Ratings;
use App\Http\Resources\ProgramResource;

class RatingController extends Controller
{

    /**
     * Token for api access
     *
     * @var string
     */
    protected $token = 'DarbaGuru';

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_ratings()
    {
        if($this->token == $request->input('token'))
        {
            $data = Ratings::all();
            return response()->json($data);
        }else{
            return response()->json('The token value is invalid.');
        }
    }

    /**
     * Add new rating
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_rating(Request $request)
    {
        if($this->token == $request->input('token'))
        {
            $validator = Validator::make($request->all(),[
                'post_id'       => 'required|int',
                'post_title'    => 'required|string',
                'rating'        => 'required|int',
                'token'         => 'required|string'
            ]);
            
            if($validator->fails())
            {
                return response()->json($validator->errors());   
            }else{
                Ratings::insert([
                    'post_id'    => $request->input('post_id'),
                    'post_title' => $request->input('post_title'),
                    'rating'     => $request->input('rating'),
                    'token'      => $request->input('token')
                ]);
            }
        }else{
            return response()->json('The token value is invalid.'); 
        }
    }
}
