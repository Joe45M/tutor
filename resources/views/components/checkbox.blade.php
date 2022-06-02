<div>
    <label >

        <input type="checkbox" id="{{ $name }}-{{ \Illuminate\Support\Str::random() }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'mr-2 bg-red']) }}>
        {{ $slot }}
    </label>
</div>
