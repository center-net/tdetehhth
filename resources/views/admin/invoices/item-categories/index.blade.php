@extends('layouts.general')
@section('title')
بيانات فئات الاصناف 
@endsection
@section('contentheader')
بيانات فئات الاصناف 
@endsection
@section('contentheaderlink')
<a href="{{ route('admin.ItemCategories') }}"> بيانات فئات الاصناف  </a>
@endsection
@section('contentheaderactive')
عرض
@endsection
@section('content')
<div class="row">
   <div class="col-12">
         @livewire('admin.invoices.item-categories.data')
         @livewire('admin.invoices.item-categories.add')
         @livewire('admin.invoices.item-categories.delete')
         @livewire('admin.invoices.item-categories.edit')
   </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/admin/js/treasuries.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js')}}">
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2({
        theme: 'bootstrap4'
      })
    })
</script> 
@endsection