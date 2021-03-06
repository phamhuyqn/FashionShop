@extends('adminLayout.masterLayout')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background: #d91522;"><span style="color:white">Đăng kí thành viên</span></div>
        <div class="card-body">
          <form method="POST" action="{{ route('postregister') }}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Họ và tên*</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email*</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu*</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Xác nhận mật khẩu*</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>
            <!-- <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Địa chỉ*</label>
              <div class="col-md-6">
                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
                @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
              </div>
            </div> -->
            <div class="form-group row">
              <label for="phone" class="col-md-4 col-form-label text-md-right">Quyền*</label>
              <div class="col-md-6">
                <input id="role" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus>
                @if ($errors->has('role'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('role') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4" style="margin-left: 69.333333%;">
                <button type="submit" class="btn btn-primary">
                Đăng kí
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection