<?php

namespace App;

use App\Url as URL;

class Parser
{
    public function Parse(string $url): ?Url
    {
        $id = 0 ;
        $type = '' ;

        $types = array('album', 'playlist', 'artist', 'show', 'track');

        $parseUrl = parse_url($url);
        $path = $parseUrl['path'];
        $infos = explode('/', $path);

        foreach ($types as $elem){
           if(in_array($elem, $infos, true)){
               $type = $elem;
               foreach ($infos as $info) {
                   if (is_numeric($info)) {
                       $id = $info;
                   }
               }
           }
        }
        if($type && $id > 0){
            return new Url($id, $type);
        }
        return null;
    }
}
