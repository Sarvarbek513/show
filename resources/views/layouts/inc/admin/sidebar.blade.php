<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Barcha malumotlar</li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('news.index')}}" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Yangiliklar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('articles.index')}}" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Maqolalar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('doktarants.index')}}" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-chart-line"></i>
          <span class="menu-title">Doktarantlar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('journals.index') }}" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Jurnallar</span>
        </a>
      </li>
    </ul>
  </nav>