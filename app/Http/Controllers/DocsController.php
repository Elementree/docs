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

    public function view($doc, $folder = null){

        $viewPath = 'docs.' . ($folder ? $folder + '.' : '') . $doc;

        

        if(!$this->docs->has($viewPath)){
            abort(404);
        }

        return View::make('document', ['document' => $this->docs->get($viewPath)]);

    }

}
