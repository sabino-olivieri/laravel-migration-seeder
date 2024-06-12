@extends('layouts.layout')
@section('content')
    <div class="container mt-4">
        <h3>Lista dei treni in programma</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Azienda</td>
                    <td>Stazione di partenza</td>
                    <td>Stazione di arrivo</td>
                    <td>Data di partenza</td>
                    <td>Orario di partenza</td>
                    <td>Orario di arrivo</td>
                    <td>Codice treno</td>
                    <td>Numero carrozze</td>
                    <td>In orario</td>
                    <td>Cancellato</td>
                </tr>
            </thead>

            <tbody>
                @php
                    $cont = 0;
                @endphp
                @foreach ($trainList as $train)
                    @php
                        $cont++;
                    @endphp
                    <tr>
                        @foreach ($train->getAttributes() as $attribute)
                            <td>{{ $attribute }}</td>
                        @endforeach
                    </tr>
                @endforeach
                <tr>
                    <td>
                        Treni disponibili: {{ $cont }}
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
