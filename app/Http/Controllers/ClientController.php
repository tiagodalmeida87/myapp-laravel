<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use App\Models\Client;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.client_create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {

        // $input = $request->validate ([
        //     'name'          => 'required|string|max:255',
        //     'email'         => ['required', 'email', Rule::unique('clients')->ignore($client->id)],
        //     'password'      => 'required|string',
        //     'phone'         => 'required|string',
        //     'city'          => 'required',
        //     'state'         => 'required',
        //     'street_name'   => 'required',
        //     'street_number' => 'required'
        // ],
        // [
        //     'required' => 'Este campo é obrigatório',
        //     'email' => 'Email inválido',
        //     'email.unique' => 'Email já está em uso',
        // ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
        
    // $data = [
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'password' => $request->password,
    //     'phone' => $request->phone,
    //     'city' => $request->city,
    //     'street_name' => $request->street_name,
    //     'street_number' => $request->street_number,            
    // ];
    // $client = $this->client->create($data);
    
    $input = $request->validated();
    Client::create($input);

        session()->flash('sucess', 'Cliente editado com Sucesso');
        return redirect()->route('client.clients');


        // try {
        //     $validator = Validator::make($request->all(), [
        //         'name'          => 'required|string|max:255',
        //         'email'         => ['required', 'email', Rule::unique('clients')->ignore($client->id)],
        //         'password'      => 'required|string',
        //         'phone'         => 'required|string',
        //         'city'          => 'required',
        //         'state'         => 'required',
        //         'street_name'   => 'required',
        //         'street_number' => 'required'
        //     ],
        //     [
        //         'required' => 'Este campo é obrigatório',
        //         'email' => 'Email inválido',
        //         'email.unique' => 'Email já está em uso',
        //     ]);

        //     if ($validator->fails()) {
        //         return back()->withErrors($validator)->withInput();
        //     }

        // $client = new Client;
        //     $client->name = $request->name;
        //     $client->email = $request->email;
        //     $client->password = $request->password;
        //     $client->phone = $request->phone;
        //     $client->city = $request->city;
        //     $client->street_name = $request->street_name;
        //     $client->street_number = $request->street_number;            
        
        //     $client->save();

        //     session()->flash('sucess', 'Cliente salvo com Sucesso');
        //     return redirect()->route('client.clients');

        // } catch (\Throwable $th) {
        //     session()->flash('danger', 'Erro ao tentar cadastrar Cliente. <br>'. $th->getMessage());
        //     return redirect()->route('client.clients');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.produt_edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        
            $request->validate ([
                'name'          => 'required|string|max:255',
                'email'         => ['required', 'email', Rule::unique('clients')->ignore($client->id)],
                'password'      => 'required|string',
                'phone'         => 'required|string',
                'city'          => 'required',
                'state'         => 'required',
                'street_name'   => 'required',
                'street_number' => 'required'
            ],
            [
                'required' => 'Este campo é obrigatório',
                'email' => 'Email inválido',
                'email.unique' => 'Email já está em uso',
            ]);

            // if ($validator->fails()) {
            //     return back()->withErrors($validator)->withInput();
            // }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'city' => $request->city,
            'street_name' => $request->street_name,
            'street_number' => $request->street_number,            
        ];
            $client->update($data);

            session()->flash('sucess', 'Cliente editado com Sucesso');
            return redirect()->route('client.clients');

        // } catch (\Throwable $th) {
        //     session()->flash('danger', 'Erro ao tentar editar o Cliente. <br>'. $th->getMessage());
        //     return redirect()->route('client.clients');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        // Storage::delete(4)
        return Redirect::route('client.clients');
    }
}
