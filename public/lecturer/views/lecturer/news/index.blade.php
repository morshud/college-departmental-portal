@extends('lecturer.layouts.app')

@section('title', 'News / Event')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="mediaObjectSimple" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>News / Events</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        @foreach ($event as $item)
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">{{$item->title}}</h4>
                                    <p class="media-text">{{$item->description}}</p>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>  

        </div>

    </div>
@endsection
