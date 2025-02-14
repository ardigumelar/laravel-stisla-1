@extends('layouts.l_register')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-12">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" autofocus>
                        @error('name')
                            <small class="btn btn-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select id="role_id" type="integer" class="form-control @error('role_id') is-invalid @enderror"
                        name="role_id" autofocus>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                    </select>
                    @error('role_id')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email">
                    @error('email')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password"
                        class="form-control pwstrength @error('password') is invalid @enderror" name="password">
                    @error('password')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group col 6">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                    <div class="text-small mt-5 text-center">
                        Copyright &copy; Tunas Karya Adhitama
                        <div class="mt-1">
                            <a href="{{ 'login' }}">Sign in</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
