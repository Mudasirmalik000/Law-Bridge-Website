<x-mail::message>
# Appointment Request Form Submission 

## Name: {{ $requestData['clientname'] }}
## Email: {{ $requestData['clientEmail'] }}
## Phone: {{ $requestData['clientPhone'] }}

## Message
{{ $requestData['clientDescription'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>