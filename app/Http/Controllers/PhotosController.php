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
        if ($segment == 'color' or $segment=='style') {
            $filter = $request->input('filter');
            if ($segment == 'color') {
                $colors = array(
                    'aqua',
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
                    'red',
                    'serenity',
                    'thyme',
                    'violet',
                    'white',
                    'yellow',
                    'silver',
                    'gold',
                    'x');
            }else {
                $colors = array(
                    'lineart',
                    'drawings',
                    'graphicart',
                    'watercolor',
                    'photography',
                    'blur-effects',
                    'artistic-effects',
                    'monochrome-effects',
                    'vintage-effects',
                    'distortion-effects',
                    'popart-effects',
                    'hardedits-edits',
                    'cliparts-edits',
                    'photo&drawing-edits',
                    'grid-edits',
                    'frame-edits',
                    'mask-edits',
                    'x');
                $filter = explode('-', $filter)[0];
            }
            if ($filter) {

                $photos = DB::table( $table_name )
                    ->where('tags', 'REGEXP', '^[[:space:]]*'.$filter.'([[:space:]]|$)')
                    ->paginate( $pagination_count );
            } else {
                $photos = DB::table( $table_name )
                    ->paginate( $pagination_count );
            }
            return view( 'photos.index', [ 'photos' => $photos, 'filter' => $filter, 'colors' => $colors, 'segment' => $segment ]);
            //return $filter;
        } else {
            $photos = DB::table( $table_name )->paginate( $pagination_count );
            return view( 'photos.index', [ 'photos' => $photos, 'segment' => $segment ]);
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
