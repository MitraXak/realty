
<?php 
    use App\realty;
    use App\Image;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\File;
    /*
     *  output panel realty 
     */
    Route::get('/', function() {
        $tasks = App\realty::all();
        $images = App\Image::all();
        return view('realtyList', [
            'tasks' => $tasks,
            'images' => $images 
        ]);
    });
    Route::get('/admin', function() {
        return view('realtyAdd');
    });
    Route::get('/{id}.html', 'RealtiesController@article');
    /*
        *create new realty
    */
    Route::post('/realty', function(Request $request){
        $validator = Validator::make($request -> all(), [
            'name' => 'required|max:255',
            'imglk' => 'required'
        ]);
        if($validator -> fails()) {
            return redirect('/')
                ->withInput()
                //подсветит в сессии ошибки экземпляра проверки ввода
                // можно будет обратиться к ошибке как к $errors
                ->withErrors($validator);
        }

        $paths = [];
        foreach($request->imglk as $image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            array_push($paths,$imageName);
        }


        $task = new realty;
        $task -> namelk = $request -> name;
        $task -> description = $request -> description;
        $task -> address = $request -> address;
        // if ($files = $request->file('imglk')) {
        //     $destinationPath = 'public/image/'; // upload path
        //     $files->move($destinationPath, $profileImage);
        //     $insert['imglk'] = "$profileImage";
        // }
        $task -> save();
        $id = $task -> id;
        //$img -> $request->file('imglk') -> storePublicly('public/image/');
        // if($request->hasFile('imglk')){
        //     if ($request->file('imglk')->isValid()) {
        //         $path = base_path() . '/public/images';
        //         $image_name = $request->file('imglk')->getClientOriginalName();
        //         $request->file('imglk')->move($path,$image_name);
        //     }
        // }
        foreach($paths as $p){
            $image = new Image;
            $image -> realty_id = $id;
            $image -> path = $p;
            $image -> data_img = $p;
            $image -> save();
        }
        
        
        return redirect('/');
    });
    /*
        delete realty
    */
    Route::delete('/realty/{realty}', function(realty $realty){
        //
    });
?>