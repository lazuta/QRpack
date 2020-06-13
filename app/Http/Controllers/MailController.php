<?php

namespace App\Http\Controllers;

use App\Sender;
use App\History;
use App\Packege;
use App\Recipient;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_sender' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'street' => ['required', 'string'],
            'name_rec' => ['required', 'string'],
            'country_rec' => ['required', 'string'],
            'city_rec' => ['required', 'string'],
            'street_rec' => ['required', 'string'],
            'phone_rec' => ['required', 'string'],
            'index_rec' => ['required', 'string'],
        ],[
            'name_sender.required' => 'ФИО отправителя не может быть пустым.',
            'country.required' => 'Страна отправителя не может быть пустым.',
            'city.required' => 'Город отправителя не может быть пустым.',
        ]);

        $key = $this->generateCode();

        $sender = Sender::create([
            'name' => $request['name_sender'],
            'country' => $request['country'],
            'street' => $request['street'],
            'city' => $request['city'],
        ]);

        $recipient = Recipient::create([
            'name' => $request['name_rec'],
            'country' => $request['country_rec'],
            'street' => $request['street_rec'],
            'city' => $request['city_rec'],
            'phone' => $request['phone_rec'],
            'index' => $request['index_rec'],
        ]);

        $packeg = Packege::create([
            'tracker' => $key,
            'sender_id' => $sender->id,
            'rec_id' => $recipient->id,
        ]);

        History::create([
            'description' => "Создание заявки. Терминал почты.",
            'packege_id'=> $packeg->id,
        ]);

        return redirect()->route('out.create', $key);
    }

    public function generateCode()
    {
        for($i = 0; $i <= 8; $i++)
            $keys[$i] = rand(0, 9);

        for($i = 0; $i <= 1; $i++)
            $abs[$i] = chr(rand(65, 90));

        $kode = implode('', $abs) . implode('', $keys) . "BY";

        return $kode;
    }

    public function showOut($id)
    {   
        $packege = Packege::where('tracker', $id)->first();

        $history = History::where('packege_id', $packege->id)->get();

        return view('responce', [
            'packege' => $packege,
            'history' => $history
        ]);
    }
}
