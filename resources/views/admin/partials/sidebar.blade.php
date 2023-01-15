<nav class="sidebar sidebar-offcanvas" id="sidebar" data-bs-backdrop="false">
    <ul class="nav">
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.home'
            ])>
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.recipes.index'
            ])>
            <a class="nav-link" href="{{ route('admin.recipes.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Recipes</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.allergens.index'
            ])>
            <a class="nav-link" href="{{ route('admin.allergens.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Allergens</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.ingredients.index'
            ])>
            <a class="nav-link" href="{{ route('admin.ingredients.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Ingredients</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.nutrition-values.index'
            ])>
            <a class="nav-link" href="{{ route('admin.nutrition-values.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Nutrition Values</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.preferences.index'
            ])>
            <a class="nav-link" href="{{ route('admin.preferences.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Preferences</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.units.index'
            ])>
            <a class="nav-link" href="{{ route('admin.units.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Units</span>
            </a>
        </li>
        <li @class([ 'nav-item' , 'active'=> Route::currentRouteName() == 'admin.weeks.index'
            ])>
            <a class="nav-link" href="{{ route('admin.weeks.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Weeks</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
