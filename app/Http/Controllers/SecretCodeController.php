<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\SecretCodeRepository;

class SecretCodeController extends Controller
{

    protected $secretCodeRepository;

    protected $nbrPerPage = 4;


    public function __construct(SecretCodeRepository $secretCodeRepository)
    {
        $this->middleware('auth');
        $this->secretCodeRepository = $secretCodeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$codes = DB::table('secretcodes')->paginate($nbrPerPage);*/
        $codes = 'ok';
        return view('secretcode.index', ['codes' => $codes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('secretcode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lot = $this->secretCodeRepository->store($request->all());

        return redirect()->route('codenewstored', ['lot' => $lot]);
    }

    /**
     * Display the new stored ressource.
     *
     * @param  int  $lot
     * @return \Illuminate\Http\Response
     */
    public function newstored($lot)
    {
        return view('secretcode.newstored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
