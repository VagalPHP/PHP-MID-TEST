<div>
    <h1 class="text-center text-xl font-semibold dark:text-white">Table 1 to 10</h1>
    <h3 class="text-center">Type some number and get their table 1 to 10.</h3>

    <form wire:submit="getTable" class="mt-6">
        <div class="row" style="margin-bottom: 0.5rem;">
            <label for="number">Type some number</label>
            <input type="text" wire:model="number" id="number">
            <div>
                @error('number') <span style="color: darkred">{{ $message }}</span> @enderror
            </div>
        </div>

        @if(session('result'))
            <table style="margin-top: 1rem">
                <tbody>
                @foreach(session('result') as $i => $tableResult)
                    <tr style="font-weight: bold">
                        <td>{{session('number')}}</td>
                        <td>x</td>
                        <td>{{$i}} =</td>
                        <td>{{$tableResult}}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        @endif
        <center>
            <button class="mt-6" type="submit">Get Table</button>
        </center>

    </form>
</div>
