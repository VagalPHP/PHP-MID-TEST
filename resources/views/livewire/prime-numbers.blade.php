<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Prime Numbers Check</h1>
    <h3 class="text-center">Type a number to check if it is prime or not! Also, we will tell you the first 10 prime numbers</h3>


    <form wire:submit="check" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="number">Type some number</label>
            <input type="number" wire:model="number" id="number">
            <div>
                @error('number') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        @if(is_bool(session('result')))
            <div class="row">
                <h3 style="color: darkgreen">The number {{ session('number') }} {{session('result') ? "is" : "is not"}} a prime number</h3>
            </div>
            <div class="row">
                <h4>First 10 prime numbers</h4>
                @foreach(session('primeNumbers') as $primeNumber)
                    <p>{{$primeNumber}}</p>
                @endforeach
            </div>
        @endif
        <center>
            <button class="mt-6" type="submit">Check</button>
        </center>

    </form>
</div>
