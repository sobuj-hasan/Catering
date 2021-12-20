{{-- Newslatter part Here --}}
<section id="newslatter-part" class="newslatter-part my-5">
    <div class="container">
        <div class="row py-lg-4">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                <div class="left">
                    <h5>Call Us</h5>
                    <h6>To make your custom order</h6>
                    <h2 class="section-header">+996 012 012 012</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                <h5 class="">Newslatter</h5>
                <h6 class="">To Know our New & update offer</h6>
                <form method="GET" action="{{ route('subscribe') }}">
                @csrf
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Email Here" aria-label="Recipient's username" aria-describedby="button-addon2" name="email">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">&nbsp;&nbsp;&nbsp; Subscribe &nbsp;&nbsp;&nbsp;</button>
                    </div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</section>