<div class="dlabnav">
    <div class="dlabnav-scroll">
      <ul class="metismenu" id="menu">
        <li>
          <a href="{{route('admin.index')}}" class="" aria-expanded="false">
            <i class="bi bi-grid"></i>
            <span class="nav-text">Boshqaruv paneli</span>
          </a>
        </li>
        <li>
          <a
            class="has-arrow"
            href="javascript:void(0);"
            aria-expanded="false"
            >
              <i class="bi bi-grid"></i>
              <span class="nav-text">Foydalanuvchilar</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('admin.user.index')}}">Foydalanuvchilar ro'yxati</a></li>
          </ul>
        </li>
      </ul>

    </div>
</div>
