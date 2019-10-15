@extends('layouts.main')

@section('title', $cat->name)
@section('h1title', $cat->name)
@section('h1desc', 'Check the last products for this category')

@section('content')

@if(!$productlist->isEmpty())
<div id="main-shop">

@include('front.category_pagination', ['firstTime' => '1'])

<script>
$(document).ready(function(){

 $(document).on('click', '.pagination a', function(event){
  event.preventDefault(); 
  let page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });

function fetch_data(page)
{
    let url_f = "{{url('/category_pagination')}}";
    url_f=url_f+"?page="+page;
    $.ajax({
    url:url_f,
    success:function(data)
    {
        $('#main-shop').html(data);
    }
    });
}
 
});
</script>
</div>
@else
<!-- Shop -->
<div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">
    <div class="alert alert-warning">
        <i class="icon-warning-sign"></i><strong>Warning!</strong> No products in this category
    </div>
</div><!-- #shop end -->
@endif
@endsection