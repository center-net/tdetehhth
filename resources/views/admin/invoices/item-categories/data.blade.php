<div>
    <div class="card">
        <div class="card-header">
           <h3 class="card-title card_title_center">بيانات  فئات الاصناف</h3>
           <a data-toggle="modal" data-target="#AddModel" href="#" class="btn btn-sm btn-success" >اضافة جديد</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <div class="col-md-4">
              <input type="text" wire:model.live='search' placeholder="بحث بالاسم" class="form-control"> <br>
           </div>
           <div id="ajax_responce_serarchDiv">
              @if (@isset($data) && !@empty($data) && count($data) >0 )
              @php
              $i=1;   
              @endphp
              <table id="example2" class="table table-bordered table-hover">
                 <thead class="custom_thead">
                    <th>مسلسل</th>
                    <th>اسم الفئة</th>
                    <th>صورة الفئة</th>
                    <th>حالة التفعيل</th>
                    <th></th>
                 </thead>
                 <tbody>
                    @foreach ($data as $info )
                    <tr>
                       <td>{{ $i }}</td>
                       <td>{{ $info->name }}</td>
                       <td><img class="custom_img" src="{{ asset('/uploads/ItemCategorie').'/'.$info->image}}"  alt="صورة الخلفية"> </td>
                       <td>@if($info->active==1) مفعل @else معطل @endif</td>
                       <td>
                          <a href="#" wire:click.prevent="$dispatch('EditModel', { id: {{ $info->id }} })" class="btn btn-sm  btn-primary">تعديل</a>   
                          <a href="#" wire:click.prevent="$dispatch('DeleteModel', { id: {{ $info->id }} })" class="btn btn-sm  btn-danger">حذف</a>   
                          {{-- <a href="{{ route('admin.treasuries.details',$info->id) }}" class="btn btn-sm  btn-info">المزيد</a>    --}}
                       </td>
                    </tr>
                    @php
                    $i++; 
                    @endphp
                    @endforeach
                 </tbody>
              </table>
              <br>
              {{ $data->links() }}
              @else
              <div class="alert alert-danger">
                 عفوا لاتوجد بيانات لعرضها !!
              </div>
              @endif
           </div>
        </div>
     </div>

</div>
