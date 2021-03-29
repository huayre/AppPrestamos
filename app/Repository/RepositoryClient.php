<?php


namespace App\Repository;


use App\Models\Client;

class RepositoryClient
{
    public function list()
    {
        return Client::latest();
    }
    public function store($datosCliente)
    {
        $client=Client::create($datosCliente);
        return $client;
    }
    public  function delete($idCliente)
    {
        $status=Client::destroy($idCliente);
        return $status;
    }
    public  function findClient($idCliente)
    {
        $client=Client::find($idCliente);
        return $client;
    }
    public  function findClientForNumDocument($numDocument)
    {
        $client=Client::where('number_document','like',$numDocument.'%')->get();
        return $client;
    }
    public  function update($idClient,$dataClient)
    {
        $client=Client::find($idClient);
        $status=$client->update($dataClient);
        return $status;
    }

}
