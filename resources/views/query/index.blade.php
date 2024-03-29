@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('queries.index') }}">
                            Consultar un Numero Primo
                        </a></br>
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de consultas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('queries.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Numero</th>
										<th>Primos</th>
                                        <th>Suma</th>
                                        <th>Fecha Consulta</th>
										<th>User</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($queries as $query)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $query->numero }}</td>
                                            <td>{{ $query->primos }}</td>
                                            <td>{{ $query->suma }}</td>
                                            <td>{{ $query->created_at }}</td>
											<td>{{ $query->user->name }}</td>

                                            <td>
                                                <form action="{{ route('queries.destroy',$query->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('queries.show',$query->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('queries.download',$query->id) }}"><i class="fa fa-fw fa-eye"></i> Descargar</a>
                                                    {{-- <a class="btn btn-sm btn-success" href="{{ route('queries.edit',$query->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $queries->links() !!}
            </div>
        </div>
    </div>
@stop
