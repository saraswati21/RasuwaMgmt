<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Rasuwa Traders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home  </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Entry
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/addcustomer">Customer</a>
                    <a class="dropdown-item" href="/addproduct">Product Entry</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/addsupplier">Supplier Entry</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Transactions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Purchases</a>
                    <a class="dropdown-item" href="#">Sales</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Orders</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    List
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Purchases</a>
                    <a class="dropdown-item" href="#">Sales</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Orders</a>
                    <a class="dropdown-item" href="#">Customer Orders</a>

                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a  href="/logout" class="text-dark my-2 my-sm-0" >Logout</a>
        </form>
    </div>
</nav>
