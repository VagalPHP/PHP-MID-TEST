<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Simple Calculator</h1>
    <form wire:submit="calculate" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="firstNumber">Type some number</label>
            <input type="number" wire:model="form.firstNumber" id="firstNumber">
            <div>
                @error('form.firstNumber') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <label for="secondNumber">Type another number</label>
            <input type="number" wire:model="form.secondNumber" id="secondNumber">
            <div>
                @error('form.secondNumber') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row" style="margin-bottom: 1rem;">
            <label for="operation">What operation you wanna do with these numbers?</label>
            <select wire:model="form.operation" id="operation">
                @foreach($availableOperations as $i => $availableOperation)
                    <option {{$i === 0 ? 'selected' : null}} value="{{$availableOperation}}">{{$availableOperation}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">

            @if(is_int(session('result')))
                <div>
                    <h3 style="color: darkgreen">The result of your equation is: {{session('result')}}</h3>
                </div>
            @endif
            <center>
                <button class="mt-6" type="submit">Calculate</button>
            </center>
        </div>

    </form>
</div>
