{{-- Newslatter part Here --}}
<section id="newslatter-part" class="newslatter-part my-5">
    <div class="container">
        <div class="row py-lg-4">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                <div class="left">
                    <h5>@lang('home.call_us')</h5>
                    <h6>@lang('home.to_make_your_custom_order')</h6>
                    <h2 class="section-header">@lang('home.land_number')</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                <h5 class="">@lang('home.newsletter')</h5>
                <h6 class="">@lang('home.to_know_our_news_update')</h6>
                <form method="GET" action="{{ route('subscribe') }}">
                @csrf
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="@lang('home.email_here')" aria-label="Recipient's username" aria-describedby="button-addon2" name="email">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">&nbsp;&nbsp;&nbsp; @lang('home.subscribe') &nbsp;&nbsp;&nbsp;</button>
                    </div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</section>