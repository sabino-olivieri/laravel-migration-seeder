@extends('layouts.layout')
@section('content')
<div class="container mt-4">
    <h3>Lista dei treni di oggi</h3>
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
            @foreach ($trainList as $train)
                <tr>
                    @foreach ($train->getAttributes() as $attribute)
                        @if ($attribute === 1 || $attribute === 0)
                            @if ($attribute === 1)
                                <td>SI</td>
                            @else
                                <td>NO</td>
                            @endif
                        @else
                        <td>{{$attribute}}</td>    
                        @endif


                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection