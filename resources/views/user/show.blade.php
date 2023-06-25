@extends('dashboard.layouts.master')
@section('title') User profile @stop
@section('style')
    <style>
        .image-preview {
            width: 300px;
            min-height: 100px;
            border: 2px solid #dddddd;
            margin-top: 15px;

            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #cccccc;
        }

        .image-preview__image {
            display: none;
            width: 100%;
        }
    </style>

@stop

@section('content')
    <div class="content-wrapper">

        <div class="content-body">





            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ $user->firstname . ' ' . $user->lastname }}</h4>
                            </div>
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" disabled id="email" class="form-control"
                                                value="{{ $user->email }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="birthday">Birthday</label>
                                            <input type="text" disabled id="birthday" class="form-control"
                                                value="{{ $user->birthday }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone number</label>
                                            <input type="text" disabled id="phone" class="form-control"
                                                value="{{ $user->phone }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="identification_no">Identification number</label>
                                            <input type="text" disabled id="identification_no" class="form-control"
                                                value="{{ $user->identification_no }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="gender"> Gender </label>
                                            <input type="text" disabled id="gender" class="form-control"
                                                value="{{ $user->gender }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address">address</label>
                                            <textarea type="text" disabled id="address" class="form-control">{{ $user->address }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="region">region</label>
                                            <input type="text" disabled id="region" value="{{ $user->region->name }}"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
@stop
@section('js')

@stop
@section('js')
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
@endsection
