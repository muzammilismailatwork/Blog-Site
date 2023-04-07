@component('mail::message')
    <div>
        <h3>Contact Details</h3>
        <p>Dear Admin,<br/>Latest contact request is found. Please check it.<br/>Thank you so much</p>
    </div>
    <div>
        Order details:
        @component('mail::table')
            |             |          |
            | ------------- |:-------------:|
            | Name      | {{$message->name}}      |
            | Email      | {{$message->email}}      |
            | Message      | {{$message->message}}      |
        @endcomponent
        <br/>
        Order Placed at: {{$message->created_at->format('l jS \of F Y h:i:s A')}}
    </div>
@endcomponent
