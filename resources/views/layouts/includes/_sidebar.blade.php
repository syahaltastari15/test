<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/Dashboard" class="simple-text">
                    Toko
                </a>
            </div>
            <ul class="nav">
            @if (auth()->user()->role == 'admin')



                <li class="{{ Request::path() == 'product' ? 'active' : ''}}">
                    <a href="/product">
                        <i class="pe-7s-box2"></i>
                        <p>Product</p>
                    </a>
                </li>

                <li class="{{ Request::path() == 'type' ? 'active' : ''}}">
                    <a href="/type">
                        <i class="pe-7s-diskette"></i>
                        <p>Tipe</p>
                    </a>
                </li>


                <li class="{{ Request::path() == 'distributor' ? 'active' : ''}}">
                    <a href="/distributor">
                        <i class="pe-7s-home"></i>
                        <p>Distributor</p>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role == 'kasir')
            <li class="{{ Request::path() == 'transaction' ? 'active' : ''}}">
                <a href="/transaction">
                    <i class="pe-7s-home"></i>
                    <p>Transaksi</p>
                </a>
            </li>
            <li class="{{ Request::path() == 'customer' ? 'active' : ''}}">
                <a href="/customer">
                    <i class="pe-7s-users"></i>
                    <p>Customer</p>
                </a>
            </li>
            @endif

            @if (auth()->user()->role == 'manager')
            <li class="{{ Request::path() == 'laporan' ? 'active' : ''}}">
                <a href="/laporan">
                    <i class="pe-7s-home"></i>
                    <p>Laporan</p>
                </a>
            </li>
            <li class="{{ Request::path() == 'laporan-transaksi' ? 'active' : ''}}">
                <a href="/laporan-transaksi">
                    <i class="pe-7s-cash"></i>
                    <p>Laporan Transaksi</p>
                </a>
            </li>
            @endif


            </ul>
    	</div>
    </div>
