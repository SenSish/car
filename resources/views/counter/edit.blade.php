@extends('dashboard.layouts.master')
@section('title') add new counter @stop
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
                                <form action="{{ route('counters.store') }}" method="POST" enctype="multipart/form-data"
                                    class="form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">counter name</label>
                                                <input type="text" value="{{$counter->name}}"  id="date_of_invoce" class="form-control"
                                                    placeholder="date_of_invoice"  required name="name" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">counter number</label>
                                                <input type="text" value="{{$counter->counter_number}}" id="last-name-column" class="form-control"
                                                    placeholder="Consumption in kilowatts " required
                                                    name="counter_number" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="counter_type">counter type</label>
                                                <select name="counter_type" value="{{$counter->counter_type}}" class="form-control form-control-sm"
                                                    id="counter_type">
                                                    <option disabled>select</option>
                                                    <option {{  $counter->counter_type == "دفع مسبق" ? 'selected' : null }}>دفع مسبق</option>
                                                    <option {{  $counter->counter_type == "فاتورة"   ? 'selected' : null }}>فاتورة </option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">counter copmany</label>
                                                <input type="text" value="{{$counter->counter_copmany}}" id="last-name-column" class="form-control"
                                                    placeholder="Consumption in kilowatts " required
                                                    name="counter_copmany" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="manufacturing_date">manufacturing date</label>
                                                <input type="date" value="{{$counter->manufacturing_date}}" id="manufacturing_date" class="form-control"
                                                    placeholder="date_of_invoice" required name="manufacturing_date" />
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
        </div>
        </section>
    </div>
    </div>
@stop
@section('js')
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
@endsection
