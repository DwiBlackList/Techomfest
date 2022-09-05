<x-app-layout>
    <form method="post" action="{{ route('DataDiriStore') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit">
    </form>
    <hr>

</x-app-layout>