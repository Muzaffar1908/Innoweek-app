<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.index') }}" class="" aria-expanded="false">
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
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Foydalanuvchilar</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.user.index') }}">User</a></li>
                    <li><a href="{{ route('admin.userticket.index') }}">Userticket</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Yangiliklar</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.news_category.index') }}">News Category</a></li>
                    <li><a href="{{ route('admin.news.index') }}">News</a></li>
                    <li><a href="{{ route('admin.galeries.index') }}">Galeries</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Arxiv</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.archive.index') }}">Archive</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">So`zlovchilar</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.speakers.index') }}">Speakers</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Konferensiya</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.conference.index') }}">Conference</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
