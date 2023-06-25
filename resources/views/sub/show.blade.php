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
                                <h4 class="card-title"><--Subscription--> </h4>
                            </div>
                            <div class="card-body">


                                <div class="row">
                                    <div class="form-group">
                                        <label for="user_name">user name:</label>
                                        <h4 id="user_name">{{ $sub->user->firstname . ' ' . $sub->user->lastname }}
                                        </h4>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">subscription number</label>
                                            <input type="text" id="date_of_invoce" class="form-control"
                                                placeholder="date_of_invoice" disabled value="{{ $sub->sub_number }}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="subscription_address">subscription address</label>
                                            <textarea  id="subscription_address" class="form-control" disabled>
                                                {{$sub->sub_address}}
                                            </textarea>
                                        </div>
                                    </div>



                                    {{-- <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">counter name</label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $invoice->subscription->counter->name }}' name="cost" />
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">counter name </label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $sub->counter->name }}'
                                                name="cost" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">counter number</label>
                                            <input type="text" id="cost" class="form-control"
                                                placeholder="Consumption in kilowatts " disabled
                                                value='{{ $sub->counter->counter_number }}'
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
