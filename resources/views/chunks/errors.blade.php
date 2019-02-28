@if($errors->isNotEmpty())
    <div class="alert alert-danger" role="alert">
        <h3>Errors</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
