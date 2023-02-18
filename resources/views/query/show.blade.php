
<a href="{{ route('queries.index') }}">
    Consultar un Numero Primo
</a></br>
    {{ $query->name ?? 'Show Query' }}

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Query</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('queries.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $query->numero }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $query->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

