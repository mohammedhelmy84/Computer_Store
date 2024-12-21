@extends('includes.layouts')

@section('content')
    <section style="background-color: #0c0091; !important;">
    </section><!-- /Contact Section -->
    <div class="container mt-5" dir="rtl">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if (session('save_error'))
            <div class="alert alert-danger">
                <p>{{ session('save_error') }}</p>
            </div>
        @endif
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"
                    style="width:150px !important; border-radius:5px !important;">الاسم</span>
                <input type="text" name="name" class="form-control" placeholder="الاسم" aria-label="Username"
                    value="{{ old('name') }}" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"
                    style="width:150px !important; border-radius:5px !important;">العنوان</span>
                <input type="text" name="address" class="form-control" placeholder="العنوان"
                    aria-label="Recipient's username" value="{{ old('address') }}" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"
                    style="width:150px !important; border-radius:5px !important;">البريد الإلكتروني</span>
                <input type="text" name="email" class="form-control" placeholder="البريد الإلكتروني"
                    aria-label="Recipient's username" value="{{ old('email') }}" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"
                    style="width:150px !important; border-radius:5px !important;">الموبايل</span>
                <input type="text" name="phone" class="form-control" placeholder="الموبايل"
                    aria-label="Recipient's username" value="{{ old('phone') }}" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"
                    style="width:150px !important; border-radius:5px !important;">كلمة السر</span>
                <input type="password" name="password" class="form-control" placeholder="كلمة السر"
                    aria-label="Recipient's username" aria-describedby="basic-addon2" id="password">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye-slash" id="eye1"></i></span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"
                    style="width:150px !important; border-radius:5px !important;">تأكيد كلمة السر</span>
                <input type="password" name="confirm_password" class="form-control" placeholder="كلمة السر"
                    aria-label="Recipient's username" aria-describedby="basic-addon2" id="confirm_password">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye-slash" id="eye2"></i></span>
            </div>
            @can('admin')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"
                        style="width:150px !important; border-radius:5px !important;">تسجيل مسئول</span>
                    <div class="form-check form-switch">
                        <input class="form-check-input m-2" type="checkbox" name="role" role="switch" value="1" id="flexSwitchCheckDefault">
                    </div>
                </div>
            @endcan

            <div class="input-group mb-3">
                <button class="btn btn-success">حفظ البيانات</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#eye1').click(function() {
                if ($(this).hasClass('fa-eye-slash')) {
                    $(this).removeClass('fa-eye-slash');
                    $(this).addClass('fa-eye');
                    $('#password').attr('type', 'text');
                } else {
                    $(this).removeClass('fa-eye');
                    $(this).addClass('fa-eye-slash');
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('#eye2').click(function() {
                if ($(this).hasClass('fa-eye-slash')) {
                    $(this).removeClass('fa-eye-slash');
                    $(this).addClass('fa-eye');
                    $('#confirm_password').attr('type', 'text');
                } else {
                    $(this).removeClass('fa-eye');
                    $(this).addClass('fa-eye-slash');
                    $('#confirm_password').attr('type', 'password');
                }
            });
        });
    </script>
@endsection
