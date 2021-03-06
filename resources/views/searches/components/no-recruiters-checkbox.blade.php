<div class="form-check">
    <label class="form-check-label disabled"
           @if (session('user.tier') !== config('app.user_tiers.premium'))
               data-toggle="tooltip"
               data-html="true"
               data-placement="left"
               title="Enable this option by <a href='/premium'>activating Premium</a>"
            @endif
    >
        <input type="checkbox"
               class="form-check-input"
               {{ $search->no_recruiters ? 'checked' : '' }}
               disabled
               readonly>
        <span class="">Don't include posts by recruiters</span>
    </label>
</div>