@extends('dashboard.layouts.master')
@section('title') add new invoice @stop
@section('content')
    <div class="content-wrapper">
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">invoice</h4>
                            </div>
                            <div class="card-body">


                                <div class="row">
                                    <div class="form-group">
                                        <label for="user_name">user name:</label>
                                        <h4 id="user_name">{{ $invoice->user->firstname . ' ' . $invoice->user->lastname }}
                                        </h4>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">date of invoice</label>
                                            <input type="text" id="date_of_invoce" class="form-control"
                                                placeholder="date_of_invoice" disabled
                                                value="{{ $invoice->date_of_invoce }}" name="date_of_invoice" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Consumption in kilowatts</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value="{{ $invoice->amount }}" name="amount" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">cost in kilowatts</label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $invoice->cost }}}' name="cost" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Total</label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $invoice->total }}' name="cost" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">subscriptions number</label>
                                            <input type="text" id="cost" class="form-control" disabled
                                                value='{{ $invoice->subscription->sub_number }}' name="cost" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">subscriptions address</label>
                                            <textarea id="cost" class="form-control rounded" disabled value='' name="cost">{{ $invoice->subscription->sub_address }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">counter name</label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $invoice->subscription->counter->name }}' name="cost" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">counter name</label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $invoice->subscription->counter->counter_number }}'
                                                name="cost" />
                                        </div>
                                    </div>


                                    {{-- <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div> --}}
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
