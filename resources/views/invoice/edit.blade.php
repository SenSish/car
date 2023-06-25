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
                                <form action="{{ route('invoices.update',$invoice->id) }}" method="POST" enctype="multipart/form-data"
                                    class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="user_name">user name:</label>
                                                <h4 id="user_name">
                                                    {{ $invoice->user->firstname . ' ' . $invoice->user->lastname }}
                                                </h4>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">date of invoice</label>
                                                    <input type="date" id="date_of_invoce" class="form-control"
                                                        placeholder="date_of_invoice" required
                                                        value="{{ $invoice->date_of_invoce }}" name="date_of_invoice" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Consumption in kilowatts</label>
                                                    <input type="text" id="last-name-column" class="form-control"
                                                        placeholder="Consumption in kilowatts " value="{{$invoice->amount}}" required name="amount" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">cost in kilowatts</label>
                                                    <input type="text" id="cost" value="{{$invoice->cost}}" class="form-control"
                                                        placeholder="Consumption in kilowatts " required
                                                        name="cost" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="user-role">subscriptions number</label>
                                                    <select name="sub_id" id="sub_id" required
                                                        class="form-control form-control-sm">
                                                        <option disabled>select</option>
                                                        @foreach ($sub as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ old('id') == $item->id ? 'selected' : null }}>
                                                                {{ $item->sub_number }}</option>
                                                        @endforeach
                                                    </select>
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
