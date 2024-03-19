<div class="row">
  <x-cards.dashboard-summary title="Total Active Links" :content="$summary?->total_active" icon="money-coins" />
  <x-cards.dashboard-summary title="Most Visited" :content="$summary?->most_visited?->long_url" 
    :helper="$summary?->most_visited ? $summary?->most_visited?->hit_count . ' times' : null" icon="world"
  />
  <x-cards.dashboard-summary title="Most Not Visited" :content="$summary?->most_not_visited?->long_url" 
    :helper="$summary?->most_not_visited ? $summary?->most_not_visited?->hit_count .' times' : null" icon="paper-diploma" 
  />
  <x-cards.dashboard-summary title="Last Created Links" :content="$summary?->most_not_visited?->long_url" 
    :helper="\Carbon\Carbon::parse($summary?->last_created?->created_at)->diffForHumans()" icon="cart" 
  />
</div>