@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">الأصناف</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{ url('categories/create1') }}" class="btn btn-outline-secondary">إضافة صنف جديد</a>
                </div>
            </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>اسم الصنف</th>
                        <th>الأحداث</th>

                    </tr>
                    @foreach ($categories as $category)
                        <tr>

                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>

                            <td>

                                <a class="btn btn-info" href="{{ url('categories/edit1/' . $category->id) }}"
                                    method="POST">تعديل</a>

                                <a class="btn btn-danger" href="{{ url('categories/delete1/' . $category->id) }}"
                                    method="POST">حذف</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
