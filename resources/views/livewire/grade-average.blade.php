<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Grade Average Calculator</h1>
    <h3 class="text-center">Type your grades in three different subjects and get your grade average.</h3>

    <form wire:submit="calculate" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="firstGrade">Type your first subject grade</label>
            <input type="number" step=".01" wire:model="form.firstGrade" id="firstGrade">
            <div>
                @error('form.firstGrade') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <label for="secondGrade">Type your second subject grade</label>
            <input type="number" step=".01" wire:model="form.secondGrade" id="secondGrade">
            <div>
                @error('form.secondGrade') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <label for="thirdGrade">Type your third subject grade</label>
            <input type="number" step=".01" wire:model="form.thirdGrade" id="thirdGrade">
            <div>
                @error('form.thirdGrade') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        @if(is_int(session('result')) || is_float(session('result')))
            <div>
                <h3 style="color: darkgreen">Your grade average is: {{session('result')}}</h3>
            </div>
        @endif
        <center>
            <button class="mt-6" type="submit">Calculate</button>
        </center>
    </form>
</div>
