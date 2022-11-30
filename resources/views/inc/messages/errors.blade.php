@if ($errors->any())
    <div class="contact-form h-75">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p style="padding: 1px">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif