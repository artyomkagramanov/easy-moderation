@extends('layouts.layout')

@section('content')
<div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="linecons-cog"></i> Dashboard</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-sm-6">
                        
                            <div class="xe-widget xe-counter-block"  data-count=".num" data-from="0" data-to="" data-suffix="" data-duration="3">
                                <div class="xe-upper">
                                    
                                    <div class="xe-icon">
                                        <i class="linecons-user"></i>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num">0</strong>
                                        <span>Verified Users</span>
                                    </div>
                                    
                                </div>
                                <div class="xe-lower">
                                    <div class="border"></div>
                                    
                                    <span>Result</span>
                                    <strong> From Total</strong>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-6">
                        
                            <div class="xe-widget xe-counter-block xe-counter-block-red"  data-count=".num" data-from="0" data-to="" data-duration="3">
                                <div class="xe-upper">
                                    
                                    <div class="xe-icon">
                                        <i class="linecons-user"></i>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num">0</strong>
                                        <span>Unerified Users</span>
                                    </div>
                                    
                                </div>
                                <div class="xe-lower">
                                    <div class="border"></div>
                                    
                                    <span>Result</span>
                                    <strong> From Total</strong>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-12">
                        
                            <div class="xe-widget xe-counter-block xe-counter-block-blue"  data-prefix="$ " data-count=".num" data-from="0" data-to="" data-duration="3" data-easing="false">
                                <div class="xe-upper">
                                    
                                    <div class="xe-icon">
                                        <i class="linecons-money"></i>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num">$ 0</strong>
                                        <span>Paid for all time</span>
                                    </div>
                                    
                                </div>
                                <div class="xe-lower">
                                    <div class="border"></div>
                                    
                                    <span>Paid Today</span>
                                    <strong>$ j</strong>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-12">
                        
                            <div class="xe-widget xe-counter-block xe-counter-block-purple" data-count=".num" data-from="0" data-to="" data-duration="3" data-easing="false">
                                <div class="xe-upper">
                                    
                                    <div class="xe-icon">
                                        <i class="linecons-doc"></i>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num">0</strong>
                                        <span>Categories Count</span>
                                    </div>
                                    
                                </div>
                                <div class="xe-lower">
                                    <div class="border"></div>
                                    
                                    <span>Categories Created Today</span>
                                    <strong>kk</strong>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    
                    <script src="/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                    <script src="/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
                    <script src="/assets/js/xenon-widgets.js"></script>           
                </div>
            </div>
        </div>
    </div>
@stop