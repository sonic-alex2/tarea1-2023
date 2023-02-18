

<a href="{{ route('queries.index') }}">
    Consultar un Numero Primo
</a></br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Query</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('queries.update', $query->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('query.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

