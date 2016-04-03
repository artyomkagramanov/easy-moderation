<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Schema, DB;

class ImportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, $segment )
    {
        return view( 'import.index' );
    }

    public function updateTag( $segment, Request $request )
    {
        // dd( $request->all() );
        $tags = $request->get( 'tags', '' );
        $photo_id = $request->get( 'photo_id', '' );
        $table_name = $segment . '_photos';
        // dd( $tags, $photo_id, $table_name );
        DB::table( $table_name )->where( 'id', $photo_id )->update( [ 'tags' => $tags ] );
        return response()->json( 'success' );
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
    public function store( $segment, Request $request)
    {

        
        $data = $request->get( 'data', '');
        $tags = $request->get( 'tags', '' );
        $parsed = json_decode( $data );
        if( json_last_error() !== JSON_ERROR_NONE ) {
            $parsed = explode( "\n", $data);
        }
        if( !is_array( $parsed ) )
            return back();
        $table_name = $segment . '_photos';
        if( !Schema::hasTable( $table_name ) ) {
            DB::statement( "CREATE TABLE IF NOT EXISTS `"  . $table_name .  "` (
              `id` int(10) unsigned NOT NULL,
              `url` text NOT NULL,
              `tags` text,
              `url_hash` varchar(255) NOT NULL
            ); " );
             DB::statement( "ALTER TABLE `" . $table_name . "`
              ADD PRIMARY KEY (`id`),
              ADD UNIQUE KEY `url_hash` (`url_hash`);" );
             DB::statement( "ALTER TABLE `"  . $table_name .   "`
              MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;" );
        } 
        foreach ($parsed as $value) {
            $hash = md5( $value );
            try {
                DB::table( $table_name )->insert( [ 'url' => $value, 'url_hash' => $hash, 'tags' => $tags ] );    
            } catch (\Exception $e) {
                
            }
            
        }

        return back();
        
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
