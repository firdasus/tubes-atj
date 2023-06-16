<div>
    <div class="col-md-5" style="background-color: aquamarine; border-type:solid;border-color:azure;border-width:2px;width:100%;margin-bottom:10px;height:100px">
        <x-adminlte-select label="Event Type" style="width: 100%" wire:click="type" id="type" name="type" onchange="checkDefaultOption()">
            <option value="" default>Please select your Event Type</option>
            @foreach ($tipe as $index => $type)
                <option value="{{$type->id}}"><b>{{$type->id}}</b>-{{$type->event_type}}</option>
            @endforeach
        </x-adminlte-select>
    </div> 
    @if ($cari == 'Predefense')
        @livewire('predefense.data')
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
