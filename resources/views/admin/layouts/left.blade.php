<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href=""><img src="{{ asset('public/images/0001-3.jpg') }}" class="img-circle" width="80" alt=""></a></p>
            <h5 class="centered">Sam Soffes</h5>
            <li class="mt">
                <a class="active" href="">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{ route('products.index') }}">
                    <i class="fa fa-tshirt"></i></i>
                    <span>Products</span>
                </a>
                <a href="javascript:">
                    <i class="fa fa-cannabis"></i>
                    <span>Categories</span>
                </a>
                <a href="javascript:">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Carts</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
