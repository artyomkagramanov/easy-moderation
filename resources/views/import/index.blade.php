@extends('layouts.layout')

@section('content')
	    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default unverified">
                <div class="error alert alert-danger alert-dismissible" role="alert" style="display:none"></div>
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="linecons-user"></i>Manage Import</h3>
                    
                    <div class="panel-options">                        
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="panel panel-default unverified">             
                            <div class="error alert alert-danger alert-dismissible" role="alert" style="display:none"></div>
                            <div class="panel-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label" for="tagsinput-1">JSON or list</label>
                                        <div class="form-input">
                                          <textarea rows="20" cols="90" name="data"></textarea>
                                        </div>
                                        <label class="control-label" for="tagsinput-1">Tags</label>
                                        <div class="form-input">
                                           <textarea rows="2" cols="90" name="tags"></textarea>
                                        </div>
                                        <div class="form-input">
                                            {!! csrf_field() !!}
                                            <input type="submit" class="btn btn-success btn-single" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>                    
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop