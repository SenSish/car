@extends('dashboard.layouts.master')
@section('title') add users @stop
@section('content')
    <div class="content-wrapper">

        <div class="content-body">





            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">user</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.update', $user->id) }}" method="POST"
                                    enctype="multipart/form-data" class="form">
                                    @method('Put')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">User first name </label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="user first name" value=" {{ $user->firstname }}"
                                                    name="firstname" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">User last name </label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                    placeholder="  user last name" value="{{ $user->lastname }}"
                                                    name="lastname" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name"
                                                    class="form-label">{{ __('Identification Number') }}</label>
                                                <input id="identification_no" name="identification_no" type="text"
                                                    class="form-control @error('identification_no') is-invalid @enderror"
                                                    name="identification_no" value="{{ $user->identification_no }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label ">{{ __('Email Address') }}</label>
                                                <input id="email" type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ $user->email }}" name="email" value="{{ old('email') }}"
                                                    required autocomplete="email">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                                <input id="password" type="password" value="{{ $user->password }}"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="password-confirm"
                                                    class="form-label ">{{ __('Confirm Password') }}</label>


                                                <input id="password-confirm" type="password" value="{{ $user->password }}"
                                                    class="form-control" name="password_confirmation" required
                                                    autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="address">User address </label>
                                                <textarea type="text" id="address" class="form-control" placeholder="   user address" name="address">{{ $user->address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">{{ __('phone') }}</label>
                                                <input id="phone" type="tel" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ $user->phone }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Birthday</label>
                                                <input type="date" id="	birthday-column" value="{{ $user->birthday }}"
                                                    class="form-control" name="birthday" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="user-role">gender</label>
                                                <select name="gender" id="gender"
                                                    class="form-control form-control-sm">
                                                    <option disabled>select</option>
                                                    <option {{ $user->gender == 'male' ? 'selected' : null }}>male</option>
                                                    <option {{ $user->gender == 'female' ? 'selected' : null }}>female
                                                    </option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="region_id" class="form-label ">Region</label>
                                                <select name="region_id" id="region_id"
                                                    class="form-control form-control-sm">
                                                    <option disabled>select</option>
                                                    @foreach ($region as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('id') == $item->id ? 'selected' : null }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>

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
