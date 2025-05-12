<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;
use App\Mail\ReciverContactMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function __construct(protected ContactService $service) {}

    public function index(Request $request)
    {



        return $this->service->findAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $res = $this->service->create($request->all());
        if ($res) {
            Mail::to(env('MAIL_TO'))->send(new ReciverContactMail($res));

            
            return    $this->json($res);
        }

        return $this->error("error ao cadastrar");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $res = $this->service->findById($id);

        if (!$res) return $this->error('contato não encontrada');

        return $res;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



        $res = $this->service->findById($id);

        if (!$res) return $this->error("contato não encontrado");

        $this->service->update($id, $request->all());

        $res = $this->service->findById($id);

        return $this->json($res);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        if ($this->service->delete($id)) return $this->success("contato deletado com sucesso");

        return $this->error("Error ao apagar contato");
    }
    public function active(string $id)
    {

        $res = $this->service->findById($id);

        if (!$res) {
            return $this->error('contato não encontrado');
        }

        $this->service->update($id, ['status' => true]);

        return $this->success('contato ativado com sucesso');
    }

    public function disable(string $id)
    {

        $res = $this->service->findById($id);

        if (!$res) {
            return $this->error('contato não encontrado');
        }

        $this->service->update($id, ['status' => false]);

        return $this->success('contato desativado com sucesso');
    }
}
