<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class DTPizzasController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pizzas
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('front');
	}

    public function adminIndex()
    {
        return view('back');
    }


	/**
	 * Show the form for creating a new resource.
	 * GET /pizzas/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('front');
	}

    public function adminCreate()
    {
        return view('back');
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzas
	 *
	 * @return Response
	 */

    public function store()
    {
        return view('front');
    }

	public function adminStore()
	{
        return view('back');
	}


	/**
	 * Display the specified resource.
	 * GET /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id)
    {
        return view('front');
    }

	public function adminShow($id)
	{
        return view('back');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pizzas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return view('front');
	}

    public function adminEdit($id)
    {
        return view('back');
    }

	/**
	 * Update the specified resource in storage.
	 * PUT /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return view('front');
	}

    public function adminUpdate($id)
    {
        return view('back');
    }

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        return view('front');
	}

    public function adminDestroy($id)
    {
        return view('back');
    }

}