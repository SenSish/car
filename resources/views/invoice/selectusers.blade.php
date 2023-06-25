@extends('dashboard.layouts.master')
@section('title') add new invoice @stop
@section('content')

    <form action="{{ route('invoces.selectuser') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label class="form-label" for="sub_id">select user</label>
                    <select name="user_id" id="user_id" class="form-control form-control-sm">
                        <option disabled>select</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id }}" {{ old('id') == $item->id ? 'selected' : null }}>
                                {{ $item->firstname . ' ' . $item->lastname }}</option>
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
@endsection
@section('js')
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
@endsection
