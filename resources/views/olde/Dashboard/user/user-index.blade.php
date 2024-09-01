<div>
    @section('page-header')
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الموظفين</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <button class="btn btn-primary btn-rounded btn-block" data-target="#showCreateModel" data-toggle="modal">إضافة موظف</button>
            </div>
        </div>
    @endsection
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="example2">
                        <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">إسم المستخدم</th>
                                <th class="wd-15p border-bottom-0">الإسم</th>
                                <th class="wd-15p border-bottom-0">البريد الإلكتروني</th>
                                <th class="wd-15p border-bottom-0">الصلاحيات</th>
                                <th class="wd-15p border-bottom-0">اخر دخول</th>
                                <th class="wd-15p border-bottom-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index=>$row)
                            <tr>
                                <td>{{ $index +1}}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td><span class="btn {{ $row->role->color }} btn-rounded btn-block ">{{ $row->role->name }}</span></td>
                                <td>
                                    @if(Cache::has('user-is-online-' . $row->id))
                                        <span class="btn btn-primary btn-rounded btn-block m-0">online</span>
                                    @else
                                        <span class="btn btn-dark btn-rounded btn-block m-0">{{ \Carbon\Carbon::parse($row->last_seen)->diffForHumans() }}</span>
                                        
                                    @endif
                                    
                                </td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- bd -->
        </div><!-- bd -->
    </div>
    @livewire('Dashboard.user.user-create')
</div>
