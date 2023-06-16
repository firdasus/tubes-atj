<div class="row">
    <div class="col-md-5">
        <x-adminlte-select2 label="Event Type" style="width: 100%" wire:model="type" id="type" name="type">
            <option default>Please select your Event Type</option>
            @foreach ($tipe as $index => $type)
                <option value="{{$type->id}}"><b>{{$type->id}}</b>-{{$type->event_type}}</option>
            @endforeach
            @error('type') <span class="text-danger">{{ $message }}</span><br> @enderror
        </x-adminlte-select2>

    </div>  
</div>