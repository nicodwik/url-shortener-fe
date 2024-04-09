<div class="main-content">
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('{{ asset('assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        
        <div class="card blur shadow-blur mx-4 mt-n6">
            <div class="card-body">
                <div class="row gx-4">
                    <form wire:submit="save" role="form text-left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Long URL') }}</label>
                                    <div class="@error('long_url')border border-danger rounded-3 @enderror">
                                        <input wire:model="long_url" class="form-control" type="url" required
                                            placeholder="https://www.google.com" id="long-url">
                                    </div>
                                    @error('long_url') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save' }}</button>
                        </div>
                    </form>
                </div>
            </div>
          
        </div>
    </div>

    {{-- <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create Links') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Long URL') }}</label>
                                <div class="@error('long_url')border border-danger rounded-3 @enderror">
                                    <input wire:model="long_url" class="form-control" type="url"
                                        placeholder="www.google.com" id="long-url">
                                </div>
                                @error('long_url') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</div>
