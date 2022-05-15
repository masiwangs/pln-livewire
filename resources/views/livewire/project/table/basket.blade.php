<div class="card card-rounded">
    <div class="card-body">
        <div class="mb-3 d-flex justify-content-between">
            <h2>Basket {{ $basket }}</h2>
            <a href="/{{ $tahap }}/baru?basket={{ $basket }}" class="btn btn-primary">Baru</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    @foreach($head as $h)
                    <th>{{ $h }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($body as $b)
                <tr>
                    @foreach($b as $data)
                    <td>{{ $data }}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
