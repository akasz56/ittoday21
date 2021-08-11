<h1 class="mt-5 fw-bold">Ticket Details</h1>
<div class="border p-3 rounded-3">
    <div class="text-center">
        <div class="fw-bold text-black-50">{{ $viewModel->ticketID }}</div>
        <div>{{ $viewModel->name }} | {{ $viewModel->email }}</div>
        <div>{{ $viewModel->phone }} | {{ $viewModel->whatsapp }}</div>
    </div>
    <h2 class="mt-5 fw-bold text-center">{{ $viewModel->bundleName }}</h2>
    <div class="row">
        @foreach ( $viewModel->eventsIncluded as $item )
        @if ($item)
        <div class="border p-3 rounded-3">
            <div class="text-center">{{$item->name}}</div>
        </div>
        @endif
        @endforeach
    </div>
</div>