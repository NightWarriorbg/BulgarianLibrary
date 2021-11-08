@extends('layouts.auth')

@section('content')
<div class="card card-panel">
    <div class="card-body card-auth">
        <div class="panel-header">
            <h1>Регистрация</h1>
        </div>

        <div class="auth-content">

            <form class="form-area" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-2">
                    <input type="text" class="form-control input-field auth-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Потребителско име ..."
                           required autocomplete="username">
                </div>
                <div class="mb-2">
                    <input type="email" class="form-control input-field auth-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail адрес ..."
                            autocomplete="password">
                </div>
                <div class="mb-2">
                    <input type="password" class="form-control input-field auth-input @error('passowrd') is-invalid @enderror" name="password" placeholder="Парола ..."
                           required autocomplete="new-password">
                </div>
                <div class="mb-2">
                    <input type="password" id="password-confirm" class="form-control input-field auth-input" name="password_confirmation"
                           placeholder="Повтори парола ..." required autocomplete="new-password">
                </div>
                <div class="mb-2">
                    <input type="submit" class="form-control" class="btn btn-default" value="Регистрация">
                </div>

                <div>
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </form>

        </div>

    </div>
</div>
@endsection
