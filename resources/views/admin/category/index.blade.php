@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Information</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->description}}</td>
                                <td>
                                    @include('admin.partials.options')
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
@endsection