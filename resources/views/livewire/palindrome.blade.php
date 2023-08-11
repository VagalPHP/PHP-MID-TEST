<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Palindrome Checker</h1>
    <h3 class="text-center">Type some word and check if this is a Palindrome or not.</h3>

    <form wire:submit="check" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="word">Type some word</label>
            <input type="text" wire:model="word" id="word">
            <div>
                @error('word') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>
        @if(is_bool(session('result')))
            <div>
                <h3 style="color: darkgreen">The word "{{session('word')}}" {{session('result') ? "is " : "is not "}} a palindrome.</h3>
            </div>
        @endif
        <center>
            <button class="mt-6" type="submit">Get Table</button>
        </center>

    </form>
</div>
