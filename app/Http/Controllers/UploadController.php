<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class UploadController extends Controller
{
    public function form_docs(){
        //dd('form_docs');
    return view('upload/form_docs');
    }

    public function upload_docs(Request $request){

        $validated  = $request->validate([
            'document' => 'mimes:jpg,bmp,png,pdf'    
            ]);



        //verifica se o arquivo foi enviado
        if($request->hasfile('document')){
        //
        $docsFileName =$request->file('document')->getClientOriginalName();
        //armazenar o documento da pasta
        $path=$request->file('document')->store('public/docs');

        



        //inserir infos no banco
        $document = new Document;
        $document -> fileName = $docsFileName;
        $document ->path =str_replace('public/', '', $path);
        $document->save();

        return redirect()->back() ->with('success', 'Documento enviado com sucesso!');
    }
    return redirect()->back() ->with('erro', 'Documento  não enviado !');
    }
}
