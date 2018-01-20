@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'https://sellerpier.com/'])
            SellerPier
        @endcomponent
    @endslot
    {{-- Body --}}
    Test Mail From SellerPier CO
    @component('mail::button', ['url' => 'https://sellerpier.com/' ])
    Welcome To SellerPier
    @endcomponent
    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} SellerPier Team. All rights reserved.
        @endcomponent
    @endslot
@endcomponent

