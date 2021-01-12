<aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4> 
        @if (session('success'))
            <div class="alert alert-success alert-dismissible show" role="alert">
                <strong>{{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    {{-- <span class="badge bg-light text-success">Thank you for subscribing to our newsletter !</span> --}}
    </br>
    <form action="{{ route('subscriptions.store') }}" method="POST">
        @csrf
    <div class="form-group">
    
     <input type="email" name="email" id="email" class="form-control  @error('email') border border-danger @enderror " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email'>
        @error('email')
        <small id="email" class="form-text text-danger">{{ $message }} </small>
        @enderror
    
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
    </form>
    </aside>