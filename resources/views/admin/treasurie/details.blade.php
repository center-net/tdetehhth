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
         @livewire('admin.treasurie.treasurie-details', ['id' => $id])
         @livewire('admin.treasurie.sub-treasuries', ['id' => $id])
   </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/admin/js/treasuries.js') }}"></script>
@endsection