@extends('includes.layouts')

@section('content')
    <section style="background-color: #0c0091; !important;">
    </section><!-- /Contact Section -->
    <div class="container mt-5" dir="rtl">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session()->get('error'))
        @include('messages.error')
        @endif
        <form class="form mt-5" action="{{ route('authenticate') }}" method="post">
            @csrf
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">البريد اللإلكتروني</label>
                <input type="email" name="email" id="form2Example1" class="form-control" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">كلمة السر</label>
                <div style="position: relative"><input type="password" name="password" id="password" class="form-control" />
               <i class="fa fa-eye-slash" id="eye1" style="position: absolute !important; top:0; left:0; padding-top:10px;"></i></div>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                {{-- <button type="submit" class="btn btn-primary">دخول</button> --}}
                <input type="submit" class="btn btn-primary" value="دخول">
            </div>


            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31">تذكرني</label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">نسيت كلمة السر؟</a>
                </div>
            </div>



            <!-- Register buttons -->
            <div class="text-center">
                <p>ليس لديك حساب؟<a href="#!">تسجيل</a></p>
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
