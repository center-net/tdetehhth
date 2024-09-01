@extends('layouts.general')
@section('title')
الضبط العام
@endsection
@section('contentheader')
الخزن
@endsection
@section('contentheaderlink')
<a href="{{ route('admin.treasuries') }}"> الخزن </a>
@endsection
@section('contentheaderactive')
عرض
@endsection
@section('content')
<div class="row">
   <div class="col-12">
         @livewire('admin.treasurie.treasurie-data')
         @livewire('admin.treasurie.treasurie-add')
         @livewire('admin.treasurie.treasurie-delete')
         @livewire('admin.treasurie.treasurie-edit')
   </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/admin/js/treasuries.js') }}"></script>
@endsection