<header class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed">
    <div class="container" style="padding: 0;">
        <main-logo-component></main-logo-component>
        <nav-header-component guest="{{ Auth::guest() }}"></nav-header-component>
    </div>
</header>
<div class="header-substrate"></div>
