<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snippet;

class SnippetDashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $filter = $request->query('filter', 'all');
        
        // Get snippets based on filter
        $query = $user->snippets();
        
        if ($filter === 'favorite') {
            $snippets = $query->where('favorite', true)->get();
            \Log::info('Snippet Dashboard Request', [
            'filter' => $filter,
            'user_id' => $user->id,
            'total_snippets' => $snippets->count(),
            'query_sql' => $query->toSql(),
            'query_bindings' => $query->getBindings()
        ]);
        } else {
            $snippets = $query->get();
        }

        \Log::info("Actual Snippets",[
            'snippets' => $snippets->toArray()
        ]);


        return view('dashboard', [
            'snippets' => $snippets,
            'filter' => $filter,
        ]);
    }
   
    public function snippetStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'language' => 'required|string',
            'code' => 'required|string'
        ]);
        
        $snippet = new Snippet();
        $snippet->title = $validated['title'];
        $snippet->description = $validated['description'];
        $snippet->language = $validated['language'];
        $snippet->code = $validated['code'];
        $snippet->user_id = auth()->id();
        $snippet->save();
        
        return redirect()->route('account.snippet-dashboard')->with('success', 'Snippet created successfully');
    }

    public function snippetDelete($id)
    {
        $snippet = Snippet::where('user_id', auth()->id())->findOrFail($id);
        $snippet->delete();
        
        return redirect()->route('account.snippet-dashboard')->with('success', 'Snippet deleted successfully');
    }

    public function snippetFavorite($id)
    {
        $snippet = Snippet::where('user_id', auth()->id())->findOrFail($id);
        $snippet->favorite = !$snippet->favorite;
        // $snippet->favorite = $snippet->favorite ? 0 : 1;
        
        $snippet->save();
        
        \Log::info('Snippet Favorite Toggle', [
            'snippet_id' => $id,
            'new_favorite_status' => $snippet->favorite,
            'user_id' => auth()->id()
        ]);
        
        return redirect()->back()->with('success', 'Snippet favorite status updated');
    }

    public function update(Request $request, $id){
        $snippet=Snippet::where('user_id', auth()->id())->findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'language' => 'required|string',
            'code' => 'required|string'
        ]);

        $snippet->title = $validated['title'];
        $snippet->description = $validated['description'];
        $snippet->language = $validated['language'];
        $snippet->code = $validated['code'];
        $snippet->save();

        return redirect()->route('account.snippet-dashboard')->with('success', 'Updated created successfully');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}