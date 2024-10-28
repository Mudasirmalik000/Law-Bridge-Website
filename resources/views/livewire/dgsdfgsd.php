<div>

    <html>

    <head>
        <title>Your Request Received</title>
    </head>

    <body>
        <h1>Thank you for your request!</h1>

        <p>We have received your request and will get back to you shortly.</p>

        <p><strong>Your Information:</strong></p>
        <ul>
            <li>

                Name: {{ $clientname }}

            </li>
            <li>Email: {{ $clientEmail }}</li>
            <li>Phone: {{ $clientPhone }}</li>
            <li>Description: {{ $clientDescription }}</li>
            <li>Date: {{ $currentDate }}</li>
        </ul>
    </body>

    </html>
</div>
