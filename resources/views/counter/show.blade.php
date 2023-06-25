@extends('dashboard.layouts.master')
@section('title') counter @stop
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">counter</h4>
                            </div>
                            <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">counter name</label>
                                                <input type="text" id="date_of_invoce" class="form-control"
                                                    placeholder="date_of_invoice" disabled value="{{$counter->name}}" required name="name" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">counter number</label>
                                                <input type="text" disabled id="last-name-column" class="form-control"
                                                    placeholder="Consumption in kilowatts " value="{{$counter->counter_number}}" required name="counter_number" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">counter type</label>
                                                <input type="text" disabled id="last-name-column" class="form-control"
                                                    placeholder="Consumption in kilowatts " value="{{$counter->counter_type}}" required name="counter_number" />
                                            </div>
                                        </div>





                                            <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">counter copmany</label>
                                                <input type="text" disabled  id="last-name-column" class="form-control"
                                                    placeholder="Consumption in kilowatts " value="{{$counter->counter_copmany}}" required name="counter_copmany" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="manufacturing_date">manufacturing date</label>
                                                <input type="date" disabled id="manufacturing_date" class="form-control"
                                                    placeholder="date_of_invoice" value="{{$counter->manufacturing_date}}" required name="manufacturing_date" />
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
