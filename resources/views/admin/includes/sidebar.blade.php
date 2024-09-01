<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #640005;">
   <!-- Brand Logo -->
   <a href="{{ route('admin.index') }}" class="brand-link">
   <img src="{{ asset('assets/admin/imgs/sidebar.jpeg') }}" alt="AdminLTE Logo" class=" elevation-3"
      style="opacity: .8;width: 95%;">
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{ asset('assets/admin/imgs/dash.jpeg') }}" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            {{-- @if(check_permission_main_menue(1)==true)    --}}
               <li class="nav-item has-treeview {{ (request()->is('admin/setting*'))?'menu-open':'' }}     ">
               <a href="#" class="nav-link {{ (request()->is('admin/setting*') )?'active':'' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     الضبط العام
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  {{-- @if(check_permission_sub_menue(1)==true)   --}}
                  <li class="nav-item">
                     <a href="{{ route('admin.generalsetting') }}" class="nav-link {{ (request()->is('admin/setting/GeneralSetting*')) ?'active':'' }}">
                        <p>الضبط العام</p>
                     </a>
                  </li>
               {{-- @endif --}}
               {{-- @if(check_permission_sub_menue(2)==true)   --}}
                  <li class="nav-item">
                     <a href="{{ route('admin.treasuries') }}" class="nav-link {{ (request()->is('admin/setting/Treasuries*') )?'active':'' }}">
                        <p>بيانات الخزن</p>
                     </a>
                  </li>
                  {{-- @endif --}}
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>