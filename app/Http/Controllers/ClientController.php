<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryClient;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ClientController extends Controller
{
    private $RepositoryClient;

    public function __construct(RepositoryClient $RepositoryClient)
    {
        $this->RepositoryClient = $RepositoryClient;
    }

    public function index()
    {

        return view('maintenance.client.index');

    }

    public function datatableClient()
    {
        $dataClients = $this->RepositoryClient->list();

        return Datatables::of($dataClients)
            ->addColumn('item', function () {
                return null;
            })
            ->addColumn('name', function ($fila) {
                return $fila->firstname . ' ' . $fila->lastname;
            })
            ->addColumn('action', function ($fila) {
                $btn = '<button  class="btn  btn-sm mr-1" onclick="editarCliente(' . $fila->id . ')"><i class="fa fa-edit text-info"></i></button>';

                $btn = $btn . '<button  class="btn  btn-sm " onclick="eliminarCliente(' . $fila->id . ')"><i class="fa fa-trash text-danger"></i></button>';

                return '<div class="row mx-auto">' . $btn . '</div>';
            })->make(true);
    }

    public function show($idCliente)
    {
        $client = $this->RepositoryClient->findClient($idCliente);
        return response()->json($client);
    }

    public function findFormNumDocument($numDocument){
        $clients = $this->RepositoryClient->findClientForNumDocument($numDocument);
        $listclient=[];
        foreach ($clients as $client) {
            $listclient[]=['label'=>$client->firstname.' '.$client->lastname,'type_document'=>$client->type_document,'number_document'=>$client->number_document];
        }
        return response()->json($listclient);
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $client = $this->RepositoryClient->store($request->all());
            if (isset($client)) {
                return response()->json(['result' => 'success']);
            } else {
                return response()->json(['result' => 'error']);
            }
        }

    }

    public function update($idClient, Request $request)
    {
        if ($request->ajax()) {
            $status = $this->RepositoryClient->update($idClient, $request->all());
            if ($status) {
                return response()->json(['result' => 'success']);
            } else {
                return response()->json(['result' => 'error']);
            }
        }

    }

    public function destroy($idCliente)
    {
        $status = $this->RepositoryClient->delete($idCliente);
        if ($status) {
            return response()->json(['result' => 'success']);
        } else {
            return response()->json(['result' => 'error']);
        }
    }
}
