@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <ul class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
