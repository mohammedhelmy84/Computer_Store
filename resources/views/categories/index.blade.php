@include('dashboard.header')
<div class="wrapper">
    @include('dashboard.sidebar')
    <div class="main">
        @include('dashboard.navbar')
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->get('success'))
                @include('messages.success-login')
            @endif
            <div class="card mx-auto bg-light">
                <div class="card-header">
                    التصنيفات المضافة سابقاً
                </div>
                <div class="card-body">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">إضافة صنف جديد+</a>
                    <h5 class="card-title"></h5>
                    <p class="card-text">اضغط لإضافة تصنيفات جديدة</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive mx-auto" dir="rtl">
                <table class="table table-striped mx-auto">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الصنف</th>
                            <th scope="col">ملاحظات</th>
                            <th scope="col">وقت الإضافة</th>
                            <th scope="col" colspan="2">تعديل&حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        ?>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ ++$counter }}</th>
                                <td>{{ $category->category_type }}</td>
                                <td>{{ $category->category_notes }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $category->id }}">
                                        تعديل
                                    </button>

                                    <!-- Modal Edit -->
                                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div data-mdb-input-init class="form-outline mb-4">
                                                            <label class="form-label" for="form2Example1">الصنف</label>
                                                            <input type="text" name="category_type"
                                                                id="form2Example1" class="form-control"
                                                                value="{{ $category->category_type }}" />
                                                        </div>

                                                        <div data-mdb-input-init class="form-outline mb-4">
                                                            <label class="form-label"
                                                                for="form2Example1">ملاحظات</label>
                                                            <textarea name="category_notes" id="" class="form-control" cols="30" rows="10" placeholder="ملاحظات">
                                                                {{ $category->category_notes }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">إغلاق</button>
                                                        <button type="submit" class="btn btn-primary">حفظ
                                                            التعديل</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--End Edit-->
                                <td>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('هل متأكد من حذف العنصر ؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('dashboard.footer')
