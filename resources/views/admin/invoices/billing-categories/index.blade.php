@extends('layouts.general')
@section('title')
المنتجات
@endsection
@section('contentheader')
بيانات المنتجات 
@endsection
@section('contentheaderlink')
<a href="{{ route('admin.BillingCategories') }}">بيانات المنتجات  </a>
@endsection
@section('contentheaderactive')
عرض
@endsection
@section('content')
<div class="row">
   <div class="col-12">
         @livewire('admin.invoices.billing-categories.data')
         @livewire('admin.invoices.billing-categories.add')
         @livewire('admin.invoices.billing-categories.delete')
         @livewire('admin.invoices.billing-categories.edit')
   </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/admin/js/treasuries.js') }}"></script>
@endsection