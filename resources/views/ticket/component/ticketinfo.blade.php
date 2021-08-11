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
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse{{ $i }}">
                    {{$item->name}}
                </button>
            </h2>
            <div id="collapse{{ $i }}" class="accordion-collapse collapse <?php if ($i == 1) echo 'show'?>"
                aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
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