<x-app-layout>
    <a href="{{ route('DataDiriCreate') }}">Tambah data diri</a>
    @if(!empty($datadirisendiri))
    {{ $datadirisendiri->file }}
    {{ $datadirisendiri->status }}
    {{ Auth::user()->name }}
    <a href="{{ route('DataDiriDownload' , $datadirisendiri->lokasi) }}">download</a>

    <a href="{{ route('DataDiriDelete' , $datadirisendiri->id) }}">{{ $datadirisendiri->id }}</a>

    @else
    <h1>Belum buat team</h1>
    @endif
</x-app-layout>