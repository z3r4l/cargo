<x-client-layouts>
    <div>
        <!-- 
                =============================================
                    Theme Inner Banner
                ============================================== 
                -->
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>Blog SINGLE</h2>
                </div> <!-- /.container -->
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
    
    
        <!-- 
                =============================================
                    Our Blog
                ============================================== 
                -->
        <div class="our-blog section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12">
                        <div class="post-wrapper blog-details">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="{{ url('storage/post/'. $post->image) }}" style="object-fit: cover; object-position: center;" alt="">
                                    <div class="overlay"><a href="#" class="date">{{ $post->created_at->isoFormat('dddd, D MMMM Y | hh:mm:ss')}}</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title">{{ $post->title }}</h5>
                                    <p style="text-align: justify">{{$post->body}}
                                    </p>
                                </div> <!-- /.post-meta -->
                                <div class="share-option clearfix">
                                    <ul class="social-icon float-right">
                                        <li><i class="fa fa-share-alt" aria-hidden="true"></i> Share :</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> <!-- /.share-option -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.post-wrapper -->
                        <!-- ==================== Related Post ================= -->
                        <div class="inner-box">
                            <div class="theme-title-one">
                                <h2>RELATED POSTS</h2>
                            </div> <!-- /.theme-title-one -->
                            <div class="row">
                                <div class="related-post-slider">
                                    @foreach ($recent as $item)
                                        <div class="item">
                                            <div class="single-blog">
                                                <div class="image-box">
                                                    <img src="{{ url('storage/post/'. $item->image) }}" alt="" style="object-fit: cover; object-position: center;">
                                                    <div class="overlay"><a href="#" class="date">{{ $item->created_at->diffForHumans() }}</a></div>
                                                </div> <!-- /.image-box -->
                                                <div class="post-meta">
                                                    <h5 class="title"><a href="#">{{Str::limit($item->title,50)}}</a></h5>
                                                    <a href="#" class="read-more">READ MORE</a>
                                                </div> <!-- /.post-meta -->
                                            </div> <!-- /.single-blog -->
                                        </div> <!-- /.col- -->
                                    @endforeach
                                </div> <!-- /.related-product-slider -->
                            </div> <!-- /.row -->
                        </div> <!-- /.inner-box -->
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
        </div> <!-- /.blog-details -->
    </div>
</x-client-layouts>