<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<style>
        /* Inline CSS for demonstration; you can move this to public/css/invoice.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .invoice {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        header p {
            margin: 5px 0;
        }
        .worker-info, .client-info, .appointment-details {
            margin-bottom: 20px;
        }
        .worker-info h2, .client-info h2, .appointment-details h2 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 10px;
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        thead {
            background-color: #f4f4f4;
        }
        footer {
            border-top: 2px solid #333;
            padding-top: 10px;
            text-align: center;
        }
        #searchInput {
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .invoice {
                padding: 10px;
            }
            header h1 {
                font-size: 20px;
            }
            table, th, td {
                font-size: 14px;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 18px;
            }
            table, th, td {
                font-size: 12px;
            }
            footer {
                font-size: 14px;
            }
        }
    </style>




    <div class="invoice">
        <header>
            <h1>Appointment Invoice</h1>
            @foreach($appointments as $appointment)
            <p><strong>Appointment ID:</strong> {{ $appointment->id ?? 'N/A' }}0</p>
            <p><strong>Appointment Status:</strong> {{ $appointment->status ?? 'N/A' }}</p>
            <p><strong>Date:</strong> <span id="invoiceDate">{{ date('F j, Y') }}</span></p>
            @endforeach
        </header>

        <!-- <section class="worker-info">
            <h2>Worker Information</h2>
            @if($worker)
            <p><strong>Worker Name:</strong> {{ $worker->Name ?? 'N/A' }} {{ $worker->lastname ?? 'N/A' }}</p>
            <p><strong>Worker Category:</strong> {{ $worker->Category ?? 'N/A' }}</p>
               
            @else
                <p>Worker information not available.</p>
            @endif
        </section> -->

        <section class="client-info">
            <h2>Client Information</h2>
            @if($appointments)
            @foreach($appointments as $appointment)
                <p><strong>Name:</strong> {{ $appointment->fullName ?? 'N/A' }}</p>
                <p><strong>Email:</strong> {{ $appointment->email ?? 'N/A' }}</p>
                @endforeach
            @else
                <p>Client information not available.</p>
            @endif
        </section>

        <section class="appointment-details">
            <h2>Appointment Details</h2>
            <input type="text" id="searchInput" placeholder="Search appointments...">
          
                
           
                <table id="appointmentsTable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->formatted_date }}</td>
                                <td>{{ $appointment->formatted_time }}</td>
                                <td>{{ $appointment->area }}</td>
                                <td>{{ $appointment->worker->Category }}</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            
        </section>

        <footer>
            <h3>Thank you for choosing our service!</h3>
            <button style="background-color:black; color:white; padding:5px 15px" id="printButton">Print Invoice</button>
        </footer>
    </div>
    </body>
    </html>