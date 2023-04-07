@component('mail::message')
    <div>
        <h3>Your Contact Details</h3>
        <p>Dear Customer,<br/>Your contact detail recorded in our system. Our service agent will contact you soon for further process.<br/>Thank you so much</p>
    </div>
    <div>
        Order details:
        @component('mail::table')
            |             |          |
            | ------------- |:-------------:|
            | Name      | {{$user->name}}      |
            | Email      | {{$user->email}}      |
            | Message      | {{$user->message}}      |
        @endcomponent
        <br/>
        Order Placed at: {{$user->created_at->format('l jS \of F Y h:i:s A')}}
    </div>
@endcomponent
