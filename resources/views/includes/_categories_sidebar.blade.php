<nav class="department-nav-menu">
    <button class="sidebar-close">
        <i class="fas fa-times"></i>
    </button>
    <ul class="nav-menu-list">
        @if (!empty($filteredcategories))
            @foreach ($filteredcategories as $category)
                <li>
                    <a href="#" data-href="load_prod" data-category="{{ $category }}" class="nav-link">
                        <span class="menu-text">{{ $category }}</span>
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</nav>
