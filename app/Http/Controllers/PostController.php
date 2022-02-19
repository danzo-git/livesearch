<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(Request $request){
   
     
        if($request->ajax()){
           
          // 
            $data=Post::where('id','like','%'.$request->search.'%')
            ->orwhere('title','like','%'.$request->search.'%')
            ->orwhere('description','like','%'.$request->search.'%')
            ->get();
            $output='';
            // dd($data);
            // dd($categorie);
            if(count($data)>0){
                 
                $output .='
                <table class="table">
                <thead>
                  <tr>
                 
                    
                  </tr>
                </thead>
                <tbody>
                ';
                //foreach($categorie as $cat) 
                foreach($data as $row)
                
                $output .='  <tr>
                  
                    <td>'.$row->title.'</td>
                    
                   <td class="btn btn-primary text-dark" > <a href="'.route('articles',$row->id).'"> voir</a></td>
                  </tr>';
                
                
             $output .='   </tbody>
              </table>
                ';
            }else
            
            {
                $output .="Aucun resultat";
            }
            
            return $output;
        }

    }

    public function articles(Request $request){
    $resultat= Post::where('description','like','%'.$request->description.'%')
    ->orwhere('title','like','%'.$request->title.'%')
    // ->orwhere('description','like','%'.$request->search.'%')
    ->get();
    // dd($resultat);
      return view('articles')->with('resultat',$resultat);
    }


    public function recherche(){
      
        $search_text=$_GET['search'];
        $resultat= Post::where('description','like','%'.$search_text.'%')
        ->orwhere('title','like','%'.$search_text.'%')
        //->orwhere('description','like','%'.$request->search.'%')
        ->get();

        return view('resultat', compact('resultat'));
    }
}

