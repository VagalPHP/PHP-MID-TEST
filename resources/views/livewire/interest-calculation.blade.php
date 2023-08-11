<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Interest Calculator</h1>
    <h3 class="text-center">Calc your interest investment in months.</h3>
    <form wire:submit="calculate" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="initialCapital">Initial Capital ($)</label>
            <input type="number" step=".01" wire:model="form.initialCapital" id="initialCapital">
            <div>
                @error('form.initialCapital') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <label for="interestRate">Interest Rate (%) </label>
            <input type="number" step=".01" wire:model="form.interestRate" id="interestRate">
            <div>
                @error('form.interestRate') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <label for="interestTime">Interest Time (in Months)</label>
            <input type="number" wire:model="form.interestTime" id="interestTime">
            <div>
                @error('form.interestTime') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        @if(is_int(session('result')) || is_float(session('result')))
            @php $data = session('data'); @endphp
            <div>
                <h3 style="color: darkgreen">Your interest amount of $ {{$data["initialCapital"]}} in {{$data["interestTime"]}} months at {{$data["interestRate"]}}%/year will be: $ {{session('result')}}</h3>
            </div>
        @endif
        <center>
            <button class="mt-6" type="submit">Calculate</button>
        </center>

    </form>
</div>
