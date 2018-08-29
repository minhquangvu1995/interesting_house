@extends('layouts.default')

@section('title', 'Home')

@push('css')
    <link href="/assets/plugins/nvd3/nvd3.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet"/>
    {{--<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />--}}
@endpush

@section('content')
    {{--    @php dd($post_all_active); @endphp--}}
    <!-- begin breadcrumb -->
    {{--<ol class="breadcrumb pull-right">--}}
    {{--<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>--}}
    {{--<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>--}}
    {{--<li class="breadcrumb-item active">Dashboard v2</li>--}}
    {{--</ol>--}}
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Home <?/*<small>header small text goes here...</small> */?></h1>
    <!-- end page-header -->
    <!-- begin row -->
    @if($post_all_active)
        <div class="row">
            @foreach($post_all_active as $post)
                <div class="col-lg-6 ui-sortable">
                    <div class="panel panel-inverse">
                        <div class="panel-heading ui-sortable-handle">
                            <div class="panel-heading-btn">
                                {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"--}}
                                {{--data-click="panel-expand"><i class="fa fa-expand"></i></a>--}}
                                {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"--}}
                                {{--data-click="panel-reload"><i class="fa fa-redo"></i></a>--}}
                                {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"--}}
                                {{--data-click="panel-collapse"><i class="fa fa-minus"></i></a>--}}
                                {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"--}}
                                {{--data-click="panel-remove"><i class="fa fa-times"></i></a>--}}
                            </div>
                            <h4 class="panel-title">{{ $post->users->name }}</h4>
                        </div>

                        <div class="panel-body">{{ $post->content }}</div>

                        <div class="container p-b-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-default btn-block">
                                        <i class="fas fa-lg fa-fw m-r-10 fa-heart"></i> Like
                                    </button>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-default btn-block">
                                        <i class="fas fa-lg fa-fw m-r-10 fa-comment"></i> Comment
                                    </button>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-default btn-block">
                                        <i class="fas fa-lg fa-fw m-r-10 fa-exchange-alt"></i> Repost
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    @endif
    <!-- end row -->
@endsection



@push('scripts')
    <script src="/assets/plugins/nvd3/nvd3.min.js"></script>
    <script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    {{--<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>--}}
    <script src="/assets/js/demo/dashboard-v2.js"></script>
    <script>
        $(document).ready(function () {
            DashboardV2.init();
        });
    </script>
@endpush