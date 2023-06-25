@extends('dashboard.layouts.master')
@section('title') User profile @stop
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Profile
                                </h4>
                            </div>
                            <div class="card-body">


                                <div class="row">
                                    <div class="form-group">
                                        <label for="user_name">user name:</label>
                                        <h4 id="user_name">{{ $user->firstname . ' ' . $user->lastname }}
                                        </h4>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="identification_no">identification number</label>
                                            <input type="text" id="identification_no" class="form-control" disabled
                                                value="{{ $user->identification_no }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="identification_no">Phone number</label>
                                            <input type="text" id="identification_no" class="form-control" disabled
                                                value="{{ $user->phone }}" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="gender">gender</label>
                                            <input type="text" id="gender" class="form-control" disabled
                                                value="{{ $user->gender }}" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="region">Region</label>
                                            <input type="text" id="region" class="form-control" disabled
                                                value="{{ $user->region->name}}" />
                                        </div>
                                    </div>




                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address">address</label>
                                            <textarea  id="address" class="form-control"
                                                 disabled
                                                 >
                                                    {{$user->address}}
                                                </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="birthday">	birthday </label>
                                            <input type="date" id="birthday" class="form-control" disabled
                                                value='{{ $user->birthday }}' />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control"
                                                 disabled
                                                value='{{ $user->email }}' name="cost" />
                                        </div>
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
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
@endsection
