@include('dashboard.header')
<div class="wrapper">
    @include('dashboard.sidebar')
    <div class="main">
        @include('dashboard.navbar')
        <div class="row" dir="rtl">
            <h4 class="text-center">تسجيل أصناف جديدة</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('messages.success-login')
            <div class="col col-9 mx-auto">
                <form class="form mt-5" action="{{ route('category.store') }}" method="post">
                    @csrf

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">الصنف</label>
                        <input type="text" name="category_type" id="form2Example1" class="form-control"
                            placeholder="ادخل الصنف" />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">ملاحظات</label>
                        <textarea name="category_notes" id="" class="form-control" cols="30" rows="10" placeholder="ملاحظات"></textarea>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="submit" class="btn btn-primary" value="إضافة">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('dashboard.footer')
