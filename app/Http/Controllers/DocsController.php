<?php

namespace Elementree\Docs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Elementree\Docs\Documentation;

class DocsController extends Controller
{

    protected $docs;

    public function __construct(Documentation $docs){
        $this->docs = $docs;
    }

    public function index(){
        return $this->view('welcome');
    }

    public function view($folder = null, $doc = null){

        $parts = ['docs'];
        if($folder) array_push($parts, $folder);
        if($doc) array_push($parts, $doc);

        $viewPath = implode($parts, '.');


        if(!$this->docs->has($viewPath)){
            abort(404);
        }

        return View::make('document', ['document' => $this->docs->get($viewPath)]);

    }

}
