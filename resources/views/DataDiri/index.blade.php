<x-app-layout>
    <a href="{{ route('DataDiriCreate') }}">Tambah data diri</a>
    @if(!empty($datadiri))
    {{ $datadiri->file }}
    {{ $datadiri->status }}
    {{ Auth::user()->name }}
    <a href="{{ route('DataDiriDownload' , $datadiri->lokasi) }}">download</a>

    <a href="{{ route('DataDiriDelete' , $datadiri->id) }}">{{ $datadiri->id }}</a>

    @else
    <h1>Belum buat team</h1>
    @endif
</x-app-layout>