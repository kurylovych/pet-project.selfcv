
<footer>
    <div class="container">
        <div class="row">
            @foreach($contacts as $contact)

                <div class="col-12 col-4 short-info">
                    <span>{{ $contact->phone }}</span>
                    <span>{{ $contact->email }}</span>
                    <span>{{ $contact->city }}</span>
                </div>

                <div class="col-12 col-8 goodbye-text">
                    <span>{!! $contact->text !!} </span>
                </div>
            @endforeach
        </div>
    </div>
</footer>
