<x-model-component model="AddTreasurieModel" title="حذف خزنة" submitName="متأكد">

    @foreach ( $treasuries as $data)
        {{ $data->name }}
    @endforeach
</x-model-component>

