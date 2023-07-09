<x-client-layouts title="Blog">
    <div>
        <!-- 
        =============================================
            Theme Inner Banner
        ============================================== 
        -->
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>Blog</h2>
                </div> <!-- /.container -->
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->


        <!-- 
        =============================================
            Our Blog
        ============================================== 
        -->
        <div class="blog-grid section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12 our-blog">
                        <div class="post-wrapper row">
                            @foreach ($posts as $item)
                            <div class="col-md-6 col-12">
                                <div class="single-blog">
                                    <div class="image-box">
                                        <img src="{{ url('storage/post/' . $item->image) }}" width="370" height="260" alt="" style="object-fit: cover; object-position: center;">
                                        <div class="overlay"><a href="/newst-detail/{{ $item->slug }}" class="date">{{
                                                $item->created_at->diffForHumans() }}</a></div>
                                    </div> <!-- /.image-box -->
                                    <div class="post-meta">
                                        <h5 class="title"><a href="/newst-detail/{{ $item->slug }}">{{ Str::limit($item->title, 60) }}</a>
                                        </h5>
                                        <p>{{ Str::limit($item->body, 100) }}</p>
                                        <a href="/newst-detail/{{ $item->slug }}" class="read-more">READ MORE</a>
                                    </div> <!-- /.post-meta -->
                                </div> <!-- /.single-blog -->
                            </div> <!-- /.col- -->
                            @endforeach
                        </div>
                        <div class="theme-pagination">
                            {{ $posts->links() }}
                        </div>
                    </div>
                    
                    <!-- ===================== Blog Sidebar ==================== -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                        <div class="sidebar-container sidebar-search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div> <!-- /.sidebar-search -->
                        <div class="sidebar-container sidebar-categories">
                            <h5 class="title">Kategori</h5>
                            <ul>
                                @foreach ($category as $item)
                                <li><a href="#">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div> <!-- /.sidebar-categories -->
                        <div class="sidebar-container sidebar-recent-post">
                            <h5 class="title">Recent Posts</h5>
                            <ul>
                                @foreach ($recent as $item)
                                <li class="clearfix">
                                    <img src="{{ url('storage/post/' . $item->image) }}" width="65" height="60" alt="" class="float-left" style="object-fit: cover; object-position: cente
                                    ;">
                                    <div class="post float-left">
                                        <a href="/newst-detail/{{ $item->slug }}">{{ Str::limit($item->title,30) }}</a>
                                        <div class="date">{{ $item->created_at->diffForHumans() }}</div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div> <!-- /.sidebar-recent-post -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.blog-inner-page -->
    </div>
</x-client-layouts>