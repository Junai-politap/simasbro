@section('name')
    <div class="image">
        @if ($mitra->logo == $mitra->logo)
            <img src="{{ url("public/$mitra->logo") }}"
                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
        @endif
    </div>
    <div class="info">
        <a href="{{ url('mitra-page') }}" class="d-block">
            {{ $mitra->pemegang_akses }}
        </a>
    </div>
@endsection

@section('logo')
    <div class="image">
        @if ($mitra->logo == $mitra->logo)
            <img src="{{ url("public/$mitra->logo") }}" class="brand-image img-circle elevation-3" style="opacity: .8"
                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
        @endif
    </div>
@endsection
