<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Halaman index team
                    <hr>
                    <a href="{{ route('TeamsCreate') }}">Pembuatan Team</a>
                    <hr>
                    @if(!empty($teams))
                    {{ $teams->namateam }}
                    {{ Auth::user()->kategori }}
                    @foreach($peserta as $x)
                    {{ $x->namapeserta }}
                    @endforeach

                    <a href="{{ route('TeamsDelete' , $teams->id) }}">{{ $teams->id }}</a>

                    @else
                    <h1>Belum buat team</h1>
                    @endif                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
