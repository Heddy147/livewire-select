<div id="options" class="{{ $styles['search'] }}">

    @include($searchInputView, [
        'name' => $name,
        'placeholder' => $placeholder,
        'styles' => $styles,
    ])

    @if($searchTerm)
        @include($searchOptionsContainer, [
            'options' => $options,
            'emptyOptions' => $emptyOptions,
            'isSearching' => $isSearching,
            'styles' => $styles,
        ])
    @endif

</div>
