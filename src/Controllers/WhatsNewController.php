<?php namespace Rorichster\WhatsNew\Controllers;

use App\Http\Controllers\Controller;
use Rorichster\WhatsNew\Models\WhatsNew;
use Illuminate\Http\Request;

class WhatsNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whatsnew = WhatsNew::orderBy('created_at', 'DESC')->get();

        return view('whatsnew::whatsnew-index', compact('whatsnew'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('whatsnew::whatsnew-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $whatsnew = WhatsNew::create($request->all());
        $whatsnew->save();

        return redirect()->route('whatsnew.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $whatsnew = WhatsNew::findOrFail($id);

        return view('whatsnew::whatsnew-show', compact('whatsnew'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whatsnew = WhatsNew::findOrFail($id);

        return view('whatsnew::whatsnew-edit', compact('whatsnew'));
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
        $whatsnew = WhatsNew::findOrFail($id);
        $whatsnew->fill($request->all());
        $whatsnew->save();

        return redirect()->route('whatsnew.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whatsnew = WhatsNew::findOrFail($id);
        $whatsnew->delete();

        return redirect()->route('whatsnew.index');
    }
}