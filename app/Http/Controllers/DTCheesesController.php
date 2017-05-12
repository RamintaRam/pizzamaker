<?php namespace App\Http\Controllers;

use App\models\DTCheeses;
use Illuminate\Routing\Controller;

class DTCheesesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /cheeses
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $conf['list']=DTCheeses::get()->toArray();
        $conf['routeKey']='app.cheeses.show';

        return view('back-list', $conf);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cheeses/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
        return view('back');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cheeses
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        return view('back');
	}

	/**
	 * Display the specified resource.
	 * GET /cheeses/{id}
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
	 * GET /cheeses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function AdminEdit($id)
	{
        return view('back');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function AdminUpdate($id)
	{
        return view('back');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function AdminDestroy($id)
	{
        return view('back');
	}

}