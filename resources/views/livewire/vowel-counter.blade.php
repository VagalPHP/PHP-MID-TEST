<div>
    <h1 class="text-center text-xl font-semibold dark:text-white mb-16">Vowel Counter</h1>
    <h4 class="text-center">Type some sentence and get the vowel count.</h4>

    <form wire:submit="count" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="sentence">Type some sentence</label>
            <input type="text" wire:model="sentence" id="sentence">
            <div>
                @error('sentence') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>

        @if(session('result'))
            <div>
                <h3 style="color: darkgreen">The sentence: "{{session('sentence')}}" has {{session('result')}} vowels.</h3>
            </div>
        @endif
        <center>
            <button class="mt-6" type="submit">Count Vowels</button>
        </center>

    </form>
</div>
