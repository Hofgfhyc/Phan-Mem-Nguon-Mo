@foreach($categories as $item)

    <div style="margin-left: {{ $level * 20 }}px; margin-bottom:6px;">
        <label style="cursor:pointer;">
            <input type="radio"
                   name="parent_id"
                   value="{{ $item->id }}"
                   {{ $selected == $item->id ? 'checked' : '' }}
                   {{ $currentId == $item->id ? 'disabled' : '' }}>

            {{ str_repeat('— ', $level) }} {{ $item->name }}
        </label>
    </div>

    @if($item->children->count())
        @include('category.partials.tree', [
            'categories' => $item->children,
            'level' => $level + 1,
            'selected' => $selected,
            'currentId' => $currentId
        ])
    @endif

@endforeach
