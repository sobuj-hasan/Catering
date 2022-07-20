{{-- <!-- LATEST BLOG START -->
<section id="latest-blog" class="latest-blog my-5">
    <div class="container">
        <div class="row text-center pt-lg-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
                <h2 class="section-header after-before">@lang('home.our_latest_blog')</h2>
                <div class="after-design">
                    <i class="fas fa-circle"></i>
                </div>
            </div>
        </div>
        <div class="row pb-lg-5">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <img class="img-fluid" src="{{ asset('assets/img/blog/') }}/{{ $default_blogs->image }}" alt="blog">
                <a href="{{ route('blog.details', $default_blogs->slug) }}">
                    <h4 class="py-4">@lang('home.blog_title')</h4>
                </a>
                <p class="paragraph">{{ Str::limit($default_blogs->description, 220, $end='..') }}</p>
                <div class="blog-info mt-5 d-flex">
                    <span>Posted By {{ $default_blogs->user->name }} / {{ $default_blogs->created_at->diffForHumans() }}</span>
                    <div class="right">
                        <i class="far fa-comment"></i> <span class="ms-lg-1"> 00</span>
                        <i class="fas fa-share-alt ms-lg-2"></i> <span class="ms-lg-1"> 00</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                @foreach ($blogs as $blog)
                    <div class="d-flex blog mb-4">
                        <img src="{{ asset('assets/img/blog/') }}/{{ $blog->image }}" alt="blog-img">
                        <div class="flex-grow-1 ms-3 align-self-center content">
                            <span class="badge">@lang('home.catering')</span>
                            <span class="badge">@lang('home.big_barger')</span>
                            <a href="{{ route('blog.details', $blog->slug) }}">
                                <h4 class="py-2">{{ Str::limit($blog->title, 65, $end='..') }}</h4>
                            </a>
                            <div class="blog-info d-flex">
                                <span>Posted By {{ $blog->user->name }} / {{ $blog->created_at->diffForHumans() }}</span>
                                <div class="right">
                                    <i class="far fa-comment"></i> <span class="ms-lg-1"> 00</span>
                                    <i class="fas fa-share-alt ms-lg-2"></i> <span class="ms-lg-1"> 00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- LATEST BLOG END --> --}}