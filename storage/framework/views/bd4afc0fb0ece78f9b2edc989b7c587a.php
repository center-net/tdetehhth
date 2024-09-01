<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #640005;">
   <!-- Brand Logo -->
   <a href="<?php echo e(route('admin.index')); ?>" class="brand-link">
   <img src="<?php echo e(asset('assets/admin/imgs/sidebar.jpeg')); ?>" alt="AdminLTE Logo" class=" elevation-3"
      style="opacity: .8;width: 95%;">
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="<?php echo e(asset('assets/admin/imgs/dash.jpeg')); ?>" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            
               <li class="nav-item has-treeview <?php echo e((request()->is('admin/setting*'))?'menu-open':''); ?>">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/setting*') )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     الضبط العام
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                     <a href="<?php echo e(route('admin.generalsetting')); ?>" class="nav-link <?php echo e((request()->is('admin/setting/GeneralSetting*')) ?'active':''); ?>">
                        <p>الضبط العام</p>
                     </a>
                  </li>
               
               
                  <li class="nav-item">
                     <a href="<?php echo e(route('admin.treasuries')); ?>" class="nav-link <?php echo e((request()->is('admin/setting/Treasuries*') )?'active':''); ?>">
                        <p>بيانات الخزن</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
         

            <li class="nav-item has-treeview <?php echo e((request()->is('admin/invoicesddddddddddddddddddd*'))?'menu-open':''); ?>">
               <a href="#" class="nav-link <?php echo e(( (request()->is('admin/accountTypes*')||request()->is('admin/accounts*')  ||request()->is('admin/customer*')  ||request()->is('admin/suppliers_categories*') ||request()->is('admin/supplier*') ||(request()->is('admin/collect_transaction*') ||request()->is('admin/exchange_transaction*') ||request()->is('admin/delegates*'))) && !request()->is('admin/suppliers_orders*')  )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     الحسابات
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/accountTypes*'))?'active':''); ?>">
                        <p>
                           انواع الحسابات المالية         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/accounts*') )?'active':''); ?>">
                        <p>
                           الشجرة ( الحسابات المالية )         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/customer*') )?'active':''); ?>">
                        <p>
                           حسابات العملاء         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/delegates*') )?'active':''); ?>">
                        <p>
                           حسابات المناديب         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/suppliers_categories*') )?'active':''); ?>">
                        <p>
                           فئات الموردين         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/supplier*') and !request()->is('admin/suppliers_categories*') )?'active':''); ?>">
                        <p>
                           حسابات الموردين         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/collect_transaction*') )?'active':''); ?>">
                        <p>
                           شاشة تحصيل النقدية         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/exchange_transaction*') )?'active':''); ?>">
                        <p>
                           شاشة صرف النقدية         
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview  <?php echo e((request()->is('admin/invoices*'))?'menu-open':''); ?> ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/invoices*') )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     ضبط الفواتير
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?php echo e(route('admin.BillingCategories')); ?>" class="nav-link <?php echo e((request()->is('admin/invoices/BillingCategories*') )?'active':''); ?>">
                        *
                        <p>
                           بيانات فئات الفواتير 
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/stores*') )?'active':''); ?>">
                        *
                        <p>
                           بيانات المخازن         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/uoms*') )?'active':''); ?>">
                        *
                        <p>
                           بيانات الوحدات         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo e(route('admin.ItemCategories')); ?>" class="nav-link <?php echo e((request()->is('admin/invoices/ItemCategories*') )?'active':''); ?>">
                        *
                        <p>
                           فئات الاصناف         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo e(route('admin.products')); ?>" class="nav-link <?php echo e((request()->is('admin/products*') )?'active':''); ?>">
                        *
                        <p>
                           الاصناف         
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview <?php echo e((request()->is('admin/suppliers_orders*') ||request()->is('admin/suppliers_orders_general_return*') ||request()->is('admin/itemcardBalance*') ||request()->is('admin/stores_inventory*') ||request()->is('admin/inv_stores_transfer*') ||request()->is('admin/inv_stores_transfer_incoming*') )?'menu-open':''); ?>     ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/suppliers_orders*') ||request()->is('admin/suppliers_orders_general_return*') ||request()->is('admin/itemcardBalance*')  ||request()->is('admin/stores_inventory*') ||request()->is('admin/inv_stores_transfer*') ||request()->is('admin/inv_stores_transfer_incoming*') )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     حركات مخزنية
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/suppliers_orders*') and !request()->is('admin/suppliers_orders_general_return*') )?'active':''); ?>">
                        <p>
                           فواتير المشتريات         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/suppliers_orders_general_return*')  )?'active':''); ?>">
                        <p>
                           فواتير مرتجع المشتريات العام         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_stores_transfer*') and  !request()->is('admin/inv_stores_transfer_incoming*')  )?'active':''); ?>">
                        <p>
                           أوامر تحويل مخزنية صادرة    
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_stores_transfer_incoming*')  )?'active':''); ?>">
                        <p>
                           أوامر تحويل مخزنية واردة    
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/stores_inventory*')  )?'active':''); ?>">
                        <p>
                           جرد المخازن       
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/itemcardBalance*')  )?'active':''); ?>">
                        <p>
                           أرصدة الأصناف        
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview  <?php echo e((request()->is('admin/inv_production_order*')  || request()->is('admin/inv_production_lines*') || request()->is('admin/inv_production_exchange*')  ||request()->is('admin/inv_production_Receive*'))?'menu-open':''); ?>    ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_production_order*')  || request()->is('admin/inv_production_lines*') || request()->is('admin/inv_production_exchange*') ||request()->is('admin/inv_production_Receive*'))?'active':''); ?> ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     حركات خطوط الانتاج
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview  ">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_production_lines*')  )?'active':''); ?>">
                        <p>
                           خطوط الانتاج      
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_production_order*')  )?'active':''); ?>">
                        <p>
                           أوامر التشغيل       
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_production_exchange*')  )?'active':''); ?>">
                        <p>
                           صرف خامات لخط الانتاج      
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link ">
                        <p>
                           مرتجع خامات من خط الانتاج      
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/inv_production_Receive*')  )?'active':''); ?>">
                        <p>
                           استلام منتج تام من خط الانتاج     
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview <?php echo e((request()->is('admin/SalesInvoices*') || request()->is('admin/SalesReturnInvoices*'))?'menu-open':''); ?>     ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/SalesInvoices*') || request()->is('admin/SalesReturnInvoices*') )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     المبيعات
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/SalesInvoices*') )?'active':''); ?>">
                        <p>
                           فواتير المبيعات         
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/SalesReturnInvoices*') )?'active':''); ?>">
                        <p>
                           مرتجع المبيعات العام         
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview  <?php echo e((request()->is('admin/Services*') ||request()->is('admin/Services_orders*'))?'menu-open':''); ?>    ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/Services*') ||request()->is('admin/Services_orders*') )?'active':''); ?> ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     خدمات داخلية وخارجية
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview  ">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/Services*')  and !request()->is('admin/Services_orders*'))?'active':''); ?>">
                        <p>
                           ضبط الخدمات        
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/Services_orders*')  )?'active':''); ?>">
                        <p>
                           فواتير الخدمات        
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview <?php echo e((request()->is('admin/admin_shift*'))?'menu-open':''); ?>     ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/admin_shift*') )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     حركة شفت الخزينة  
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/admin_shift*') )?'active':''); ?>">
                        <p>
                           شفتات الخزن         
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview <?php echo e(( request()->is('admin/admins_accounts*') || request()->is('admin/permission_roles*')  || request()->is('admin/permission_main_menues*') ||request()->is('admin/permission_sub_menues*'))?'menu-open':''); ?>     ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/admins_accounts*') || request()->is('admin/permission_roles*')  || request()->is('admin/permission_main_menues*') ||request()->is('admin/permission_sub_menues*'))?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     الصلاحيات  
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">

                     <a href="#" class="nav-link <?php echo e((request()->is('admin/permission_roles*') )?'active':''); ?>">
                        <p>
                           أدوار المستخدمين         
                        </p>
                     </a>


                     <a href="#" class="nav-link <?php echo e((request()->is('admin/permission_main_menues*') )?'active':''); ?>">
                        <p>
                    القوائم الرئيسية للصلاحيات        
                        </p>
                     </a>
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/permission_sub_menues*') )?'active':''); ?>">
                        <p>
                    القوائم الفرعية للصلاحيات        
                        </p>
                     </a>
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/admins_accounts*') )?'active':''); ?>">
                        <p>
                           المستخدمين         
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview <?php echo e((request()->is('admin/FinancialReport*') || request()->is('admin/customeraccountmirror*') ||request()->is('admin/FinancialReport/delegateaccountmirror') )?'menu-open':''); ?>     ">
               <a href="#" class="nav-link <?php echo e((request()->is('admin/FinancialReport*') || request()->is('admin/customeraccountmirror*') ||request()->is('admin/FinancialReport/delegateaccountmirror') )?'active':''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     التقارير
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/FinancialReport/supplieraccountmirror') )?'active':''); ?>">
                        <p>
                           كشف حساب مورد        
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/FinancialReport/customeraccountmirror') )?'active':''); ?>">
                        <p>
                           كشف حساب عميل        
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link <?php echo e((request()->is('admin/FinancialReport/delegateaccountmirror') )?'active':''); ?>">
                        <p>
                           كشف حساب مندوب        
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview      ">
               <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     المراقبة والدعم الفني
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside><?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/includes/general.blade.php ENDPATH**/ ?>