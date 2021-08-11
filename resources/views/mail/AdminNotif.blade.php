@component('mail::message')
# Payment
Hari : {{ $hari }} <br>
Jam : {{ $jam }} <br>
Bundle : {{ $bundlename }}

@component('mail::button', ['url' => $url])
MengVerif Gas
@endcomponent

Menggege,<br>
Qerja Lembur Bagai Kuda
IT Today 2021
@endcomponent
