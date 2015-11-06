@if ($errors->any())
    <ul class='danger'>
        @foreach ($errors->all() as $error)
            {{ $error }}
            <br>
        @endforeach
    </ul>
@endif