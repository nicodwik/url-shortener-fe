@props(['title' => null, 'content' => null, 'helper' => null, 'icon' => null])

<div class="col-xl-6 col-sm-12 mb-xl-0 my-3">
    <div class="card" style="min-height: 150px">
      <div class="card-body px-3 py-4">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
                <p class="text-sm mb-4 text-capitalize font-weight-bold">{{ $title }}</p>
                <h5 class="font-weight-bolder mb-0">
                    @if (is_null($content))
                        -
                    @else
                        {{ $content }}
                    @endif
                </h5>
                @if (! is_null($helper))
                    <span class="text-secondary text-sm">{{ $helper }}</span>
                @endif
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-{{ $icon }} text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>