<?php  

namespace Dante\Markdown\model;

class Url{

    public static function getRootPath(){
        return substr(__DIR__, 0, strpos(__DIR__, 'src') + 3);
    }


}


?>