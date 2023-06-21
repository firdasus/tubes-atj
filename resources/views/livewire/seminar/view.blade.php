<div>
    <div class="col-md-5" style="border-type:solid;border-width:2px;width:100%;margin-bottom:10px;height:100px">
        <x-adminlte-select label="Event Type" style="width: 100%" wire:change="type" id="type" name="type" wire:model="selectedType">
            <option value="" default>Please Select Your Event Type</option>
            @foreach ($tipe as $index => $type)
                <option value="{{$type->id}}"><b>{{$type->id}}</b>-{{$type->event_type}}</option>
            @endforeach
        </x-adminlte-select>
    </div>
    @if ($selectorEnable)
        @livewire('seminar.data')
    @else
        <a style="font-style: italic; color: red;">Please select event type to show the event schedule</a>
    @endif
</div>

<script>
    function checkDefaultOption() {
        var selectElement = document.getElementById('type');
        var selectedValue = selectElement.value;
        var defaultValue = selectElement.options[0].value;

        if (selectedValue === defaultValue) {
            window.location.reload();
        }
    }
</script>
