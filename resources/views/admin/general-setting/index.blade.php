@extends('layouts.general')
@section('title')
الضبط العام
@endsection
@section('contentheader')
الضبط
@endsection
@section('contentheaderlink')
<a href="{{ route('admin.generalsetting') }}"> الضبط </a>
@endsection
@section('contentheaderactive')
عرض
@endsection
@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title card_title_center">بيانات الضبط العام</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            @livewire('admin.general-setting.show')
            @livewire('admin.general-setting.update')
         </div>
      </div>
   </div>
</div>
@endsection