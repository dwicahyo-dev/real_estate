<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyTypeRequest;
use App\PropertyType;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use DataTables;

class PropertyTypeController extends Controller
{
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
            $propertyTypes = PropertyType::query();
            return DataTables::eloquent($propertyTypes)
                ->addIndexColumn()
                ->editColumn('propertyTypeName', function ($propertyTypes) {
                    return $propertyTypes->name;
                })
                ->addColumn('action', function ($propertyTypes) {
                    return view(
                        'administrator.includes._action',
                        [
                            'model' => 'property_type',
                            'id' => $propertyTypes->id
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
            )->addColumn(
                [
                    'data' => 'propertyTypeName',
                    'name' => 'name',
                    'title' => 'Property Type Name',
                    'responsive' => true,
                    'style' => 'width:60%'
                ]
            )->addColumn(
                [
                    'data' => 'action',
                    'name' => 'action',
                    'title' => 'Action',
                    'orderable' => false,
                    'searchable' => false
                ]
            );

        return view('administrator.property_types.index', compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.property_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyTypeRequest $request)
    {
        PropertyType::create([
            'name' => $request->name
        ]);

        return redirect()->route('property_type.index')
            ->with('success', 'Property Type created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropertyType  $propertyType
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyType $propertyType)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertyType  $propertyType
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyType $propertyType)
    {
        return view('administrator.property_types.edit', compact('propertyType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropertyType  $propertyType
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyTypeRequest $request, PropertyType $propertyType)
    {
        $propertyType->update($request->all());

        return redirect()->route('property_type.index')
            ->with('success', 'Property Type updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropertyType  $propertyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();

        $response = [
            'success' => TRUE,
            'message' => 'Property Type deleted!'
        ];

        return response()->json($response);
    }
}
