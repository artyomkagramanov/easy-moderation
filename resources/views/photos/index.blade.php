@extends('layouts.layout')
<style>
      ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul li {     
          list-style:none;
          margin-bottom:25px;           
      }
      ul li img {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }
    .center-cropped {
  object-fit: none; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
  height: 150px !important;
  width: 150px;
}
      /*override modal for demo only*/
      .modal-dialog {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }
  </style>

@section('content')
	    <div class="row text-center">
        <div class="col-md-12">
            
            <div class="panel panel-default unverified">
                <div class="error alert alert-danger alert-dismissible" role="alert" style="display:none"></div>
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="linecons-user"></i>Photos</h3>
                    
                    <div class="panel-options">                        
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <input type="hidden" name='_token' value={{csrf_token()}}>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="row">
                        @foreach( $photos as $photo )
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                <img class="img-thumbnail center-cropped" data-toggle="tooltip" title={{$photo->tags}} src={!! $photo->url !!} >
                                <div> 
                                    <form role="form">
                                        <div class="form-group">
                                          <label for="comment">Tags:</label>
                                          <textarea data-id={{$photo->id}} class="form-control image-tags" rows="3" id="comment">{{$photo->tags}}</textarea>
                                        </div>
                                    </form>
                                    <!-- <a class='image-remove' data-id={{$photo->id}} data-placement="left" data-toggle="tooltip"  title="Delete" href="" > 
                                        <i class="fa fa-trash"></i> 
                                    </a> -->
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            <div  class="center-block">
                {!! $photos->render() !!}             
            </div>    
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">         
                       <div class="modal-body">                
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- set up the modal to start hidden and fade in and out -->
            
    </div>

@stop