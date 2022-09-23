@layouts('flex_header')

    {{-- Import partials header --}}

    @layout('spacer')
    @include('partials.spacer')
    @endlayout

@endlayouts

@layouts('flex_content')


    {{-- Import partials --}}

	@layout('section__image-grid')
	@include('partials.section__image-grid')
	@endlayout

    @layout('spacer')
    @include('partials.spacer')
    @endlayout

    @layout('wysiwyg')
    @include('partials.wysiwyg')
    @endlayout

    @layout('section__image-text')
    @include('partials.section__image-text')
    @endlayout

    @layout('section__image-banner')
    @include('partials.section__image-banner')
    @endlayout

    @layout('section__image-slider')
    @include('partials.section__image-slider')
    @endlayout

@endlayouts