<div class="dlabnav">
    <div class="dlabnav-scroll">
      <ul class="metismenu" id="menu">
        <li>
          <a href="{{route('admin.index')}}" class="" aria-expanded="false">
            <i class="bi bi-grid"></i>
            <span class="nav-text">Dashboard</span>
          </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                <i class="bi bi-grid"></i>
                <span class="nav-text">Innoweek</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.innoweek.index') }}">Innoweek</a></li>

            </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">User</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.user.index')}}">User</a></li>
            <li><a href="{{route('admin.userticket.index')}}">Userticket</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">News</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.news_category.index')}}">News Category</a></li>
            <li><a href="{{route('admin.news.index')}}">News</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Galeries</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.galeries.index')}}">Galeries</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Partners</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.partner.index')}}">Partner</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Archive</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.archive.index')}}">Archive</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Speakers</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.speakers.index')}}">Speakers</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Conference</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.conference.index')}}">Conference</a></li>
          </ul>
        </li>
        <li>
            <a
              class="has-arrow"
              href="javascript:void(0);"
              aria-expanded="false"
              >
                <i class="bi bi-grid"></i>
                <span class="nav-text">Promo</span>
            </a>
            <ul aria-expanded="false">
              <li><a href="{{route('admin.promo.index')}}">Promo</a></li>
            </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Live</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.live_statistic.index')}}">Live Statistic</a></li>
            <li><a href="{{route('admin.live360.index')}}">Live 360</a></li>
          </ul>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Push Notification</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.push_notification.index')}}">Push Notification</a></li>
          </ul>
        </li>
      </ul>

    </div>
</div>
