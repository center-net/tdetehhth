@extends('layouts.index')
@section('title')
الرئيسية
@endsection

@section('content')
<div class="row" style="background-image: url({{ asset('/uploads/admin/generalsettings/photo.jpg')}}) ;background-size:cover;background-repeate:ni-repeate; min-height:600px;">
    <div class="col-lg-3 col-6">
        <a href="{{ route('admin.general') }}" class="small-box-footer">
        <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>عام</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <a href="{{ route('admin.Home') }}" class="small-box-footer">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</h3>
                    <p>برنامج المحاسبة</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <a href="#" class="small-box-footer">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>53</h3>
                    <p>المتجر</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection