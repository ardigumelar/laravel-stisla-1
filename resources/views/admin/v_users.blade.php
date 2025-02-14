@extends('template.v_app')

@section('title', 'User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">User</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Users</h2>
                <p class="section-lead">Components relating to users, lists of users and so on.</p>
                <div class="section-body">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4>Users</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger btn-icon icon-right">View All <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme" id="users-carousel">
                                @foreach ($type_menu as $user)
                                    <div>
                                        <div class="user-item">
                                            <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}"
                                                class="img-fluid">
                                            <div class="user-details">
                                                <div class="user-name">{{ $user->name }}</div>
                                                <div class="text-job text-muted">{{ $user->email }}</div>
                                                <div class="text-job text-muted">ADMIN</div>
                                                <div class="user-cta">
                                                    <button class="btn btn-primary follow-btn"
                                                        data-follow-action="alert('{{ $user->name }} followed');"
                                                        data-unfollow-action="alert('{{ $user->name }} unfollowed');">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-user.js') }}"></script>
@endpush
