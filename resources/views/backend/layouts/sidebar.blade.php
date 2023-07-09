<div>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
    
          <hr>
          <li class="nav-heading">Pages</li>
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('struktur.index') }}">
              <i class="bi bi-clipboard-data"></i>
              <span>Struktur</span>
            </a>
          </li><!-- End F.A.Q Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('contact.index') }}">
              <i class="bi bi-card-list"></i>
              <span>Kontak</span>
            </a>
          </li><!-- End Register Page Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('partnership.index') }}">
              <i class="bi bi-diagram-3-fill"></i>
              <span>partnership</span>
            </a>
          </li><!-- End Contact Page Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('tarif.index') }}">
              <i class="bi bi-currency-dollar"></i>
              <span>Daftar Tarif Cargo</span>
            </a>
          </li><!-- End Error 404 Page Nav -->
    
          <hr>
          <li class="nav-heading">Blog</li>

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Newst</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ route('post.index') }}">
                  <i class="bi bi-circle"></i><span>Post</span>
                </a>
              </li>
              <li>
                <a href="{{ route('category.index') }}">
                  <i class="bi bi-circle"></i><span>Category</span>
                </a>
              </li>
            </ul>
          </li><!-- End Tables Nav -->
        </ul>
    
      </aside>
</div>