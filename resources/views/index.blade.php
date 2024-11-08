<head>
    <meta charset="UTF-8">
    <title>Verzoeken Overzicht</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
@extends('nav')

<main>
    <div class="container overzicht_container">
        <div class="row">
            <div class="col-12 field">

                <div class="col-12 mb-5">
                    <div>
                        <h1>Verzoeken Overzicht</h1>
                    </div>
                </div>
                <div class="col-12 mb-4 d-flex justify-content-center align-items-center">
    
                    @if(session('success'))
                        <p class="success-message">{{ session('success') }}</p>
                    @endif
                
                    @if($verzoeken->isEmpty())
                        <p>Er zijn geen verzoeken om weer te geven.</p>
                    @else
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titel</th>
                                        <th>Beschrijving</th>
                                        <th>Status</th>
                                        <th>Aangemaakt op</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($verzoeken as $verzoek)
                                        <tr>
                                            <td>{{ $verzoek->id }}</td>
                                            <td>{{ $verzoek->title }}</td>
                                            <td>{{ $verzoek->description }}</td>
                                            <td>{{ $verzoek->status }}</td>
                                            <td>{{ $verzoek->created_at->format('d-m-Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="back-button">
                        <a href="{{ url('/zakelijk') }}" class="btn fw-bold btn-primary">Terug naar Zakelijk</a>
                    </div>
                </div>
            </div>
        
        
        </div>
    </div>
    

</main>

@extends('footer')

</body>
