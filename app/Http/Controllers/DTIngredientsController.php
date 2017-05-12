<?php namespace App\Http\Controllers;

use App\models\DTIngredients;
use Illuminate\Routing\Controller;

class DTIngredientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ingredients
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
		$conf['list']=DTIngredients::get()->toArray();
		$conf['routeEdit']='app.ingredients.show';
        $conf['routeView']='app.ingredients.show';
        $conf['routeDelete']='app.ingredients.delete';

	    return view('back-list', $conf);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ingredients/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
        $data = request()->all();
        $record = DTIngredients::create($data);
        return view('back-form', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ingredients
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        return view('single-ingredient');
	}

	/**
	 * Display the specified resource.
	 * GET /ingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
        $conf['record']=DTIngredients::find($id)->toArray();
//        $conf['routeEdit']='app.ingredients.edit';
        $conf['routeShow']='app.ingredients.show';

        return view('back-single', $conf);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ingredients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
        $conf['record']=DTIngredients::find($id)->toArray();
        $conf['routeEdit']='app.ingredients.edit';
        return view('back-single', $conf);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ingredients/{id}
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
	 * DELETE /ingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{

	  //  dd('mes cia');

        DTIngredients::destroy($id);
//	    return view('back');
	}

}