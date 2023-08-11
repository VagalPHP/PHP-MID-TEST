<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Factorial Calculator</h1>
    <form wire:submit="calculate" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="number">Type some number</label>
            <input type="number" wire:model="number" id="number">
            <div>
                @error('number') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>

        @if(is_int(session('result')))
            <div>
                <h3 style="color: darkgreen">The factorial of number {{session('number')}} is: {{session('result')}}</h3>
            </div>
        @endif
        <center>
            <button class="mt-6" type="submit">Calculate</button>
        </center>
    </form>
</div>
