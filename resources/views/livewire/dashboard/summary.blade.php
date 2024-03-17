<div class="row">
  <x-cards.dashboard-summary title="Total Active Links" :content="$summary?->total_active" icon="money-coins" />
  <x-cards.dashboard-summary title="Most Visited" :content="$summary?->most_visited?->hit_count" :helper="$summary?->most_visited?->long_url" icon="world" />
  <x-cards.dashboard-summary title="Most Not Visited" :content="$summary?->most_not_visited?->hit_count" :helper="$summary?->most_not_visited?->long_url" icon="paper-diploma" />
  <x-cards.dashboard-summary title="Last Created Links" :content="\Carbon\Carbon::parse($summary?->last_created?->created_at)->diffForHumans()" :helper="$summary?->most_not_visited?->long_url" icon="cart" />
</div>