<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $segment, Request $request )
    {
        $pagination_count = env( "PAGINATION_COUNT", 200 );
        $table_name = $segment . '_photos';
        if ($segment == 'color') {
            $filter = $request->input('filter');
            $colors = array('aqua',
                'beige',
                'black',
                'black&white',
                'blue',
                'brown',
                'green',
                'grey',
                'lime',
                'orange',
                'pink',
                'pinkgrey',
                'red',
                'Serenity',
                'silver',
                'tellow',
                'thyme',
                'violet',
                'white',
                'yellow');
            if ($filter) {
                $photos = DB::table( $table_name )
                    ->where('tags', 'REGEXP', '^[[:space:]]*'.$filter.'([[:space:]]|$)')
                    ->paginate( $pagination_count );
            } else {
                $photos = DB::table( $table_name )
                    ->paginate( $pagination_count );
            }
            return view( 'photos.index', [ 'photos' => $photos, 'filter' => $filter, 'colors' => $colors ]);
            //return $filter;
        } else {
            $photos = DB::table( $table_name )->paginate( $pagination_count );
            return view( 'photos.index', [ 'photos' => $photos ]);
        }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
