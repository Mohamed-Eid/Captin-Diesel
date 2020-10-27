<ul class=" p-0 f-s-15 m-t-30">
    <h5 class="m-b-20 text-danger bold text-center">@lang('site.subscribe')</h5>
    <form action="{{ route('frontend.subscribe') }}" method="POST">
        @csrf
        <div class="form-row subscribe">
            <input type="email" name="email" class="form-control"  placeholder="Your Email Address">
            <button class="btn  gradient-top white-btn" type="submit">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </form> 
</ul>