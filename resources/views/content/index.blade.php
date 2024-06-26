@extends('layouts/contentNavbarLayout')

@section('title', 'Langganan')

@section('content')
<div class="d-flex">
    <div class="top-addon ms-auto">
        <button class="btn btn-primary px-2" onclick="window.location='/{{ $route }}'"><i class='bx bx-refresh'></i></button>
        <button class="btn btn-success" onclick="window.location='/{{ $route }}/create'">Create</button>
    </div>
</div>

    <div class="table mt-3">
        <table class="fluid-table w-100" cellpadding="10" cellspacing=0 border=1>
            <thead>
                <tr>
                    <th class="tab-id">ID</th>
                    <th>Nama</th>
                    <th>Bunga</th>
                    <th>Jumlah</th>
                    <th>Daerah</th>
                    <th>Catatan</th>
                    <th>PIC</th>
                    <th class="tab-act">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) > 0)
                @php
                    $nomor = 1 + ($data->currentPage() - 1) * $data->perPage();
                @endphp
                @foreach ($data as $d)
                    @php
                        $flowersCount = $d->flowers->count();
                    @endphp
                    <tr>
                        <td class="td-order">{{ $nomor++ }}</td>
                        <td class="td-order">
                            @if ($flowersCount > 1)
                                @for ($i = 0; $i < $flowersCount; $i++)
                                    <div class="fw-bold">{{ $d->name }}</div>
                                @endfor
                            @else
                                <div class="fw-bold">{{ $d->name }}</div>
                            @endif
                            <div class="fw-bold"><span class="fw-normal">Alamat :</span> {{ $d->address }},
                                {{ $d->regencies->name }}, {{ $d->regencies->city }} <br>
                                <span class="fw-normal">Telp :</span> {{ $d->phone }}
                            </div>
                        </td>
                        <td class="td-order">
                            @foreach ($d->flowers as $flower)
                                <div>{{ $flower->name }}</div>
                            @endforeach
                        </td>
                        <td class="td-order">
                            @foreach ($d->flowers as $flower)
                                <div>{{ $flower->pivot->total }}</div>
                            @endforeach
                        </td>
                        <td class="td-order">
                            @if ($flowersCount > 1)
                                @for ($i = 0; $i < $flowersCount; $i++)
                                    <div>{{ $d->regencies->name }}</div>
                                @endfor
                            @else
                                <div>{{ $d->regencies->name }}</div>
                            @endif
                        </td>
                        <td class="td-order"{{ $d->notes }}</td>
                        <td class="td-order">{{ $d->pic }}</td>
                        <td class="td-order d-flex flex-nowrap">
                            <button class="badge rounded bg-secondary"
                                onclick="window.location='/langganan/{{ $d->id }}'"><i
                                    class='bx bx-show'></i></button>
                            <button class="badge rounded bg-primary"
                                onclick="window.location='/langganan/{{ $d->id }}/edit'"><i
                                    class='bx bx-edit'></i></button>
                            <form action="/langganan/{{ $d->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="badge rounded bg-danger"><i class='bx bx-trash'></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                <tr>
                    <td class="p-0">
                        <h1 class="position-absolute top-50 start-50">No Results</h1>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>

{{ $data->links() }}
@endsection
