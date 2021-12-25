<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Page;

class NoteController extends Controller
{
    public function NoteStore(Request $request,Page $page)
    {
        $this->validate($request, [
            'text' => 'required'
        ],
        [
            'text.required' => "il faut dabord que tu saisis qu'elle que chose pour l'ajouter dans la page et en suit clique sur la boutton ajouter si non rient il vas se passe"
        ]
        );
        $note = new Note;
        $note->text = $request->text;
        $page->notes()->save($note);
        $note->save();

        return back();
    }
    public function Edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    public function Update(Request $request, Note $note)
    {
        $note->update($request->all());
        return redirect('pages/'.$note->page_id);
    }
    public function delete(Note $note)
    {
        $note->delete();

        return back();
    }
}
