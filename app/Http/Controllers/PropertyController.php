<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use DataTables;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    // protected $filePath = 'property_photos';
    protected $filePath = 'public/photos/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $properties = Property::with(['propertyType', 'photos']);
            return DataTables::eloquent($properties)
                ->addIndexColumn()
                ->editColumn('propertyName', function ($properties) {
                    return $properties->name;
                })
                ->editColumn('propertyType.name', function ($properties) {
                    return $properties->propertyType->name;
                })
                ->editColumn('propertyType.photos', function ($properties) {

                //    return $properties->photos;
                    return view(
                        'administrator.includes._images',
                        [
                            'src' => $properties->photos->property_id,
                            'path' => $this->filePath
                        ]
                    );
                })
                ->addColumn('action', function ($properties) {
                    return view(
                        'administrator.includes._action',
                        [
                            'model' => 'property',
                            'id' => $properties->id
                        ]
                    );
                })
                ->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(
                [
                    'data' => 'DT_RowIndex',
                    'name' => 'DT_RowIndex',
                    'title' => 'No',
                    'responsive' => true,
                    'style' => 'width:9%',
                    'orderable' => 'asc',
                    'searchable' => false
                ]
            )
            ->addColumn(
                [
                    'data' => 'propertyName',
                    'name' => 'name',
                    'title' => 'Property Name',
                    'responsive' => true,
                    'style' => 'width:40%'
                ]
            )
            ->addColumn(
                [
                    'data' => 'propertyType.name',
                    'name' => 'name',
                    'title' => 'Property Type Name',
                    'responsive' => true,
                    'style' => 'width:30%'
                ]
            )
            ->addColumn(
                [
                    'data' => 'propertyType.photos',
                    'name' => 'name',
                    'title' => 'Property Photos',
                    'responsive' => true,
                    'style' => 'width:30%'
                ]
            )
            ->addColumn(
                [
                    'data' => 'action',
                    'name' => 'action',
                    'title' => 'Action',
                    'orderable' => false,
                    'searchable' => false
                ]
            );

        return view('administrator.properties.index', compact('html'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser()
    {
        return view('pages.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
