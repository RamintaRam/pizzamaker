<?php namespace App\Http\Controllers;

use App\models\DTPads;
use Illuminate\Routing\Controller;

class DTPadsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pads
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $conf['list']=DTPads::get()->toArray();
        $conf['routeKey']='app.pads.show';

        return view('back-list', $conf);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pads/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
        return view('back');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pads
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        return view('back');
	}

	/**
	 * Display the specified resource.
	 * GET /pads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
        return view('back');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pads/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
        return view('back');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
        return view('back');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
        return view('back');
	}

}