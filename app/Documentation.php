<?php

namespace Elementree\Docs;

use League\CommonMark\Converter as MarkdownConverter;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

class Documentation {

    protected $markdown;
    protected $files;
    protected $cache;

    public function __construct(MarkdownConverter $markdown, Filesystem $files, Cache $cache){
        $this->markdown = $markdown;
        $this->files = $files;
        $this->cache = $cache;
    }

    public function has($docPath){
        return $this->files->exists($this->getPath($docPath));
    }   

    public function get($docPath){

        $markdownContent = $this->files->get($this->getPath($docPath));

        return $this->markdown->convertToHtml($markdownContent);
    }

    private function getPath($docPath){

        return resource_path('views/' . str_replace('.', '/', $docPath) . '.md');
    }


}