<h1 class="mt-5 fw-bold">Ticket Details</h1>
<div class="border p-3 rounded-3">
    <div class="text-center">
        <div class="fw-bold text-black-50">{{ $viewModel->ticketID }}</div>
        <div>{{ $viewModel->name }} | {{ $viewModel->email }}</div>
        <div>{{ $viewModel->phone }} | {{ $viewModel->whatsapp }}</div>
    </div>
    <h2 class="mt-5 fw-bold text-center">{{ $viewModel->bundleName }}</h2>
    <div class="accordion" id="accordionExample">
        <?php $i = 1 ?>
        @foreach ( $viewModel->eventsIncluded as $item )
        @if ($item)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $i }}">
                <button class="accordion-button <?php if (!isset($paid)) echo 'collapsed'?>" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse{{ $i }}">
                    {{$item->name}}
                </button>
            </h2>
            <div id="collapse{{ $i }}" class="accordion-collapse collapse <?php if (isset($paid)) echo 'show'?>"
                aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php //smol logic
                        $datetime = Carbon\Carbon::parse($item->datetime)->locale('id_ID');
                        switch ($item->name) {
                            case 'Ilkommunity AgriUX':
                                $eventLength = 90;
                                break;
                            
                            default:
                                $eventLength = 120;
                                break;
                        }
                        ?>
                    <p>
                        {{ $datetime->format('l, jS F Y') }}<br>
                        {{ $datetime->format('H:i') }} -
                        {{ $datetime->addMinutes($eventLength)->format('H:i') }}
                    </p>
                    <p>{{ $item->desc }}</p>
                    <div>
                        @if (isset($paid))
                        <a href="{{ $item->link }}">{{ $item->link }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <?php $i++ ?>
        @endif
        @endforeach
    </div>
</div>