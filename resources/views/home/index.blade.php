@extends('layouts.front')
@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner" height=80%>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1> المنتجات المتوفرة</h1>
            <style>
             .pp{
                color: gainsboro;
             }
            </style>
            <p class="pp">في هذه الصفحة يتم عرض  جميع المنتجات المتوفرة لدى الشركة   مزودة باسم المنتج بالاضافة الى وصف تفصيلي عنه  ,  بامكانك التصفح وان اعجبتك احدى المنتجات يمكنك الضغط على عرض  التفاصيل لافادتك  بطريفة افضل  .</p>


        </div>
        </div>
      </div>
        </div>
      </div>


  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      @foreach ($products as $product)
      <div class="col-lg-4">
        <h2 class="fw-normal">{{$product->product_name}}</h2>
        <p>{{$product->details}}</p>
        <p><a class="btn btn-secondary" href="#">عرض التفاصيل</a></p>
      </div><!-- /.col-lg-4 -->
      @endforeach
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->


    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection
