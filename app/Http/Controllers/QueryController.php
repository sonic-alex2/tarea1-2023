<?php

namespace App\Http\Controllers;

use App\Query;
use App\Models\User;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Class QueryController
 * @package App\Http\Controllers
 */
class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = Query::with('user')->paginate();

        return view('query.index', compact('queries'))
            ->with('i', (request()->input('page', 1) - 1) * $queries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = new Query();
        return view('query.create', compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Query::$rules);

        $query = Query::create($request->all());

        $num = $query->numero;

        $maxPrimeNumbers = 50;
        $now = 1;
        $suma = 0;

        for ( $i=1; $i<= $num; $i++ ) {
            if ($this->is_prime($i)) {
                echo $i . ",";
                $suma += $i;
                $now++;
            }
            if ( $now > $maxPrimeNumbers ) break;
        }
        return "</br> Suma = $suma";

        return redirect()->route('queries.index')
            ->with('success', 'Query created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = Query::find($id);

        /*
        $fileContent = $query; // the generated file content
        $response = new Response($fileContent);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'foo.pdf'
        );

        return $response->headers->set('Content-Disposition', $disposition);
        */
        return view('query.show', compact('query'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Query::find($id);

        return view('query.edit', compact('query'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Query $query
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Query $query)
    {
        request()->validate(Query::$rules);

        $query->update($request->all());

        return redirect()->route('queries.index')
            ->with('success', 'Query updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $query = Query::find($id)->delete();

        return redirect()->route('queries.index')
            ->with('success', 'Query deleted successfully');
    }

    public function is_prime( $num ) {
        if ( $num < 3 ) {
            return ( $num == 2 );
        }
        if ($num % 2 != 0) {
                // echo chr(10);
                // echo "Analizando el num => $num " . chr(10);
                // echo "- raiz quadrada => " . sqrt($num) . chr(10);
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                // echo "- valor actual => $i " . chr(10);
                if ($num % $i == 0) {
                    // echo chr(10) . chr(10);
                    return false;
                }
            }
            // echo chr(10) . chr(10);
            return true;
        }
        return false;
    }

    public function download($id){
        $query = Query::find($id);
        $user = User::find($query->user_id);
        return view('query.download', compact('query','user'));
    }
}
