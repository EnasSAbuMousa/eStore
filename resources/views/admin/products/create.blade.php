@extends('layouts.admin')
@section('content')
   <div class="py-3">
    <form action="{{url('products/store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="quantityFormControlInput" class="form-label">الكمية </label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>

        <div class="mb-3">
            <label for="priceFormControlInput" class="form-label">السعر</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="detailsFormControlTextarea1" class="form-label">وصف المنتج </label>
            <textarea class="form-control" id="details" name="details" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="categoryFormControlTextarea1" class="form-label">اختر الصنف</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="#"></option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
   </div>
@endsection
