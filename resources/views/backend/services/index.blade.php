@extends('backend.layout.master')
@section('head-section')
    <style>
        .inline-form{
            display: inline-block!important;
        }
    </style>
@endsection
@section('main-content')
@section('title1','Services Section')
@section('title2','Services Section')
<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">@yield('title1')</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">@yield('title2')</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card card-topline-aqua">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Services List</strong>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('services.create')}}" class="btn btn-sm btn-info text-center ml-4">Add New Service</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table class="table table-striped custom-table table-bordered">
                                <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Images</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                            
                            @foreach($services as $service)
                                    <tr>
                                    <td>{{ $service->title }}</td>
                                    <td>{!! $service->body !!}</td>
                                    <td>{{ $service->date }}</td>
                                    <td>
                                    <img src="{{asset('img/services')}}/{{$service->image}}" alt=" {{$service->title}} "
                                    style="width:100px; height:100px;">
                                    </td>

                                    <td class="m-auto">
                                            <a  class="btn btn-primary btn-xs inline-form" href="{{route('services.edit',$service->id)}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{route('services.destroy',$service->id)}}" method="post" class="inline-form">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash-o "></i></button>
                                            </form>

                                        </td>

                                    </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@stop
@section('scripts')

@endsection
