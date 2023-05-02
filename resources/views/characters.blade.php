@foreach ($characters as $character)
    @php
        print_r("<pre>");
        print_r($character);
        print_r("</pre>");
    @endphp
@endforeach