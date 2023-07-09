<div>
    <header class="header-two">
        <div class="theme-menu-wrapper">
            <div class="container">
                <div class="bg-wrapper clearfix">
                    <div class="logo float-left"><a href="index.html"><img src="{{ asset('/frontend/images/logo/erc.jpg') }}" height="75" width="141" alt="" style="object-fit: cover; object-position: center;"></a></div>
                    <!-- ============== Menu Warpper ================ -->
                       <div class="menu-wrapper float-right">
                           <nav id="mega-menu-holder" class="clearfix">
                           <ul class="clearfix">
                            @foreach ($data as $item)
                            <li class="{{ $item['active'] }}">
                                {{-- <h3>
                                    {{ dd( Request::url($item['url'])); }}
                                </h3> --}}
                                <a href="{{ $item['url'] }}">
                                    {{ $item['name'] }}
                                </a>
                            </li>
                            @endforeach
                           </ul>
                        </nav> <!-- /#mega-menu-holder -->
                       </div> <!-- /.menu-wrapper -->
                </div> <!-- /.bg-wrapper -->
            </div> <!-- /.container -->
        </div> <!-- /.theme-menu-wrapper -->
    </header> <!-- /.header-two -->
</div>