<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Imagick;
use Ramsey\Uuid\Type\Integer;
use Spatie\PdfToImage\Pdf;
use Org_Heigl\Ghostscript\Ghostscript;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FlipBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo Carbon::now($timezone)->toDateTimeString();
        // $current_time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone)) : Carbon::now();
        //echo $time->toDateTimeString();
        // return view('flipbook::time', compact('current_time'));
        $flipbooks = DB::table('flipbook')->where('status', '1')->get();

        return view('flipbook::bookindex', compact('flipbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flipbook::bookcreater');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Spatie\PdfToImage\Exceptions\PdfDoesNotExist
     */
    public function store(Request $request)
    {
        Ghostscript::setGsPath("C:\Program Files\gs\gs9.53.3\bin\gswin64c.exe");
        $input = $request->all();

        $content = "";
        $i = 1;
        foreach ($request->files as $uploadedFile) {
            //codigo para quando o GS estiver funcional
            $pdf = new Pdf($uploadedFile, (int) $input['np']);
            foreach (range(1, (int) $input['np']) as $pageNumber) {
                $filename = time() . '_' . $i . '.' . 'png';
                $i++;
                //$file = $uploadedFile->move(public_path('rudra/fbook/pics/'), $filename);
                $path = 'rudra/fbook/pics/' . $filename;
                $pdf->setPage($pageNumber)
                    ->saveImage(public_path($path));
                $content .= $path . ",";
            }
            /*
            $filename = time() . '_' . $i . '.' . $uploadedFile->getClientOriginalExtension();
            $i++;
            $file = $uploadedFile->move(public_path('rudra/fbook/pics/'), $filename);
            $path = 'rudra/fbook/pics/' . $filename;
            $content .= $path . ",";
             */

        }

        $input['content'] = rtrim($content, ",");
        $input['status'] = 1;
        $input['name'] = $input['book_name'];
        Flipbook::create($input);
        return Redirect::route('flipbook.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flipbook = DB::table('flipbook')->where('id', $id)->get()[0];
        //dd($flipbook);
        $content = explode(",", $flipbook->content);
        return view('flipbook::showbook', compact('flipbook', 'content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flipbook = DB::table('flipbook')->where('id', $id)->get()[0];
        $content = explode(",", $flipbook->content);
        return view('flipbook::editbook', compact('flipbook', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fb = Flipbook::find($id);
        $input = $request->all();
        //  return dd($input);

        $fb->content .= ",";
        $i = 1;
        foreach ($request->files as $uploadedFile) //if($request->hasFile('flip_img'))
        {
            // echo "hi";
            // $request->file()
            // $name = $uploadedFile->getClientOriginalName();
            $filename = time() . '_' . $i . '.' . $uploadedFile->getClientOriginalExtension();
            $i++;
            $file = $uploadedFile->move(public_path('rudra/fbook/pics/'), $filename);
            //$path = public_path('rudra/flipbook/pics/' . $filename);
            $path = 'rudra/fbook/pics/' . $filename;

            //$image =  $request->file('flip_img');


            // Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $fb->content .= $path . ",";

        }

        $fb->content = rtrim($fb->content, ",");

        $fb->name = $input['book_name'];
        $fb->desc = $input['desc'];
        // $input['urlname'] = strtolower(preg_replace('/[ ,]+/', '-', trim($input['name'])));
        $fb->save();
        //dd($input);
        //exit;
        // Subcategory::create($input);
        return Redirect::route('flipbook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fb = Flipbook::find($id);
        $imgArr = explode(",", $fb->content);
        foreach ($imgArr as $img) {
            $image = public_path($img);
            if (file_exists($image)) {
                unlink($image);
            }
        }
        $fb->delete();
        return Redirect::route('flipbook.index');
    }
}
