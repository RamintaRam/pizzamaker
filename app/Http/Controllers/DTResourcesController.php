<?php namespace App\Http\Controllers;

use App\models\DTResources;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller;

class DTResourcesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dtresources
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dtresources/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dtresources
	 *
	 * @return Response
	 */
	public function store()
	{

	}

	/**
	 * Display the specified resource.
	 * GET /dtresources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dtresources/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dtresources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dtresources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function upload(UploadedFile $file)
    {
        $data =  [
            "size" => $file->getSize(),
            "mime_type" => $file->getMimeType(),
            "path" => $file->getPath(),
        ];

        $path = 'upload/' . date ("Y/m/d");
        $filename = Carbon::now()->timestamp . '_' . $file->getClientOriginalName();

        $file->move(public_path($path), $filename);

        $data['path'] = $path . $filename;


       return DTResources::create($data);


    }

}