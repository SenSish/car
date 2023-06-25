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
                                <form action="{{ route('subscriptions.store') }}" method="POST"
                                    enctype="multipart/form-data" class="form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="subscription_number">subscription number</label>
                                                <input type="text" id="subscription_number" class="form-control"
                                                    placeholder="subscription number" required name="sub_number" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="subscription_address">subscription address</label>
                                                <textarea type="text" id="subscription_address" class="form-control" placeholder="Subscription Address " required
                                                    name="sub_address"></textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">cost in kilowatts</label>
                                                <input type="text" id="cost" class="form-control"
                                                    placeholder="Consumption in kilowatts " required value='0.7'
                                                    name="cost" />
                                            </div>
                                        </div> --}}

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="user-id">select user</label>
                                                <select name="user_id" id="user_id" required
                                                    class="form-control form-control-sm">
                                                    <option disabled>select</option>
                                                    {{-- <option value="">no user</option> --}}
                                                    @foreach ($user as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('id') == $item->id ? 'selected' : null }}>
                                                            {{ $item->firstname . ' ' . $item->lastname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="counter-id">select counter</label>
                                                <select name="counter_id" id="counter_id" required
                                                    class="form-control form-control-sm">
                                                    <option disabled>select</option>
                                                    @foreach ($counter as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('id') == $item->id ? 'selected' : null }}>
                                                            {{ $item->name . ' , No: '.$item->counter_number}}</option>
                                                    @endforeach
                                                </select>
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
