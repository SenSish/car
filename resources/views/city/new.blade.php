@extends('dashboard.layouts.master')
@section('title') Add City @stop
@section('content')
    <div class="content-wrapper">

        <div class="content-body">





            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">City</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('city.store') }}" method="POST" enctype="multipart/form-data"
                                    class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name"> name </label>
                                                <input type="text" id="name" class="form-control"
                                                    placeholder="city name" name="name" />
                                            </div>
                                        </div>




                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
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
