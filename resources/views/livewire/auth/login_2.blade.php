<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain">
                        <div class="card-header bg-transparent pb-0 text-left">
                            <h4 class="font-weight-bolder">Sign In</h4>
                            <p class="mb-0">Enter your email and password to sign in</p>
                        </div>
                        <div class="card-body">
                            <form wire:submit="login" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                        id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-primary w-100 mt-4 mb-0">{{ __('Sign in') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">Don't have an account? <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                        <img src="{{ asset('guest/assets/img/shapes/pattern-lines.svg') }}" alt="pattern-lines" class="position-absolute opacity-4 start-0" />
                        <div class="position-relative"><img class="max-width-500 w-100 position-relative z-index-2" src="{{ asset('guest/assets/img/illustrations/chat.png') }}" /></div>
                        <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
                        <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>