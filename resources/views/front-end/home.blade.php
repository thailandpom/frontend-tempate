@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/page.css')}}" >
@endsection
@section('content')
@foreach($datas->widgets as $data)
@if($data->widget_type == 1)
<div>
<div class="container py-3" style="background-color:{{$data->bg_color}}" >
        <div class="row">
            @foreach($data->items as $item )
            <div class="col-lg-{{12/$data->amount_column}}">
                <div class="content-editor">
                        {!!$item->content!!}
                </div>
            </div>
            @endforeach
    </div>
</div> 
</div>
@endif
@if($data->widget_type == 2)
@if($data->status == 2)
@foreach($data->items as $item )
<div class="container-fluid fix-z-index" style="background-color:{{$data->bg_color}}">
    <div class="row">
        <div class="banner-home w-100 mb-2">
        <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
         </div>
         <div class="banner-home-mobile w-100 mb-2">
            <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
        </div>
    </div>
</div>
@endforeach
@endif
@endif
@if($data->widget_type == 2)
@if($data->status != 2)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item )
             <div class="col-lg-{{12/$data->amount_column }} mb-lg-0 mb-2">
                <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
             </div>
             @endforeach
           </div>
    </div> 
@endif
@endif
@if($data->widget_type == 3)
<div class="container py-3" style="background-color:#060606">
        <div class="row">
            @foreach($data->items as $item)
            <div class="col-lg-{{12/$data->amount_column }}">
                <?php $link = explode("=", $item->youtube_link); ?>
                 <iframe class="w-100 h-video " src="https://www.youtube.com/embed/{{$link[count($link)-1]}}">
                </iframe>
            </div>
            @endforeach
        </div>
    </div> 
@endif
@if($data->widget_type == 4)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item)
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-1':'order-2' }} align-self-center">
               <div class="content-editor">
                    {!!$item->content!!}
              </div>
           </div>
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-2':'order-1'}}">
               <a href="{{$item->link!=null? $data->link:'#'}}">
                <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
                </a>
            </div>
           @endforeach
       </div>
</div> 
@endif
@if($data->widget_type == 5)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item)
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-1':'order-2' }} align-self-center">
               <div class="content-editor">
                    {!!$item->content!!}
              </div>
           </div>
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-2':'order-1'}}">
                <?php $link2 = explode("=", $item->youtube_link); ?>
                <iframe class="w-100 h-video " src="https://www.youtube.com/embed/{{$link2[count($link2)-1]}}">
                </iframe>
            </div>
            @endforeach
       </div>
</div> 
@endif
@endforeach
<div class="container-fluid fixed-top">
    <div class="">
        text
    </div>
</div>
@endsection