    {{ header("Content-Type: text/plain") }}
    {{ header('Content-Disposition: attachment; filename="consulta_numero.txt"') }}

    Numero Ingresado: {{ $query->numero }}
    User Id: {{ $query->user_id }}
    User Name = {{ $user->name }}

