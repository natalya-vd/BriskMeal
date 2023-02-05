<nav class="sidebar sidebar-offcanvas" id="sidebar" data-bs-backdrop="false">
    <ul class="nav">
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.home'
            ])>
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.recipes') ])>
            <a class="nav-link" href="{{ route('admin.recipes.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Recipes</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.weeks') ])>
            <a class="nav-link" data-bs-toggle="collapse" href="#week-basic" role="button" aria-expanded="false" aria-controls="week-basic">
                <span class="menu-title">Recipes of weeks</span>
                <i class="menu-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="week-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.weeks.index') }}">List recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.weeks.create') }}">Weeks</a>
                    </li>
                </ul>
            </div>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.orders') ])>
            <a class="nav-link" href="{{ route('admin.orders.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.allergens') ])>
            <a class="nav-link" href="{{ route('admin.allergens.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Allergens</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.ingredients') ])>
            <a class="nav-link" href="{{ route('admin.ingredients.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Ingredients</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.nutrition-values') ])>
            <a class="nav-link" href="{{ route('admin.nutrition-values.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Nutrition Values</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.preferences') ])>
            <a class="nav-link" href="{{ route('admin.preferences.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Preferences</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> str_contains(Route::currentRouteName(), 'admin.units') ])>
            <a class="nav-link" href="{{ route('admin.units.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Units</span>
            </a>
        </li>
    </ul>
</nav>