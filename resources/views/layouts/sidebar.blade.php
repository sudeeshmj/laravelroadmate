<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        
        <div class="sb-sidenav-menu ">
            <div class="nav ">
                <h3 style="color: #ffff" class="mx-auto">RoadMate</h3>
                <hr/>
            </div>
           
            <div class="nav">
                <a class="nav-link {{Request::is('products*')?'active':''}}" href="{{route('products.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Products
                </a>
            </div>
        </div>
    </nav>
</div>