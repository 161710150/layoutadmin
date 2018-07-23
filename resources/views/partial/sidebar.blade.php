<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset ('/assets/dist/img/assalaam.png')}}" alt="AdminLTE Logo" class="brand-image"
      sizes="8" 
           style="opacity: .9">
      <span class="brand-text font-weight-light">Student Complaint</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu">
            <a href="home" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
            
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item has-treeview">
           @role(['superadmin','admin'])
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-navicon"></i>
              <p>
                View Data
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            @endrole
            <ul class="nav nav-treeview">
           

              @role(['superadmin'])
              <li class="nav-item">
                <a href="{{route('datapegawai.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-user-circle-o"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
              @endrole
           

              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route('siswa.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-user-circle-o"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              @endrole
           
              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route('kelas.index')}}" class="nav-link">
                  <i class="fa fa-building-o nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              @endrole

              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route('jurusan.index')}}" class="nav-link">
                  <i class="fa fa-mortar-board nav-icon"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              @endrole
  
            </ul>
          </li>

            @role('member')
              <li class="nav-item">
                <a href="{{route('datatanya.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-inbox"></i>
                  <p>Beri Pertanyaan</p>
                </a>
              </li>
              @endrole
           
              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route('datatanya.index')}}" class="nav-link">
                  <i class="fa fa-pencil nav-icon"></i>
                  <p>Beri Jawaban</p>
                </a>
              </li>
          </li>
          @endrole

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-circle-o text-danger"></i>
                {{ __('Logout') }}
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>