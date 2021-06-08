<?

namespace Wails\Core;

class Utils
{

    public static function unserialize(string $path, bool $assoc = false) : mixed
    {
    
        return json_decode(file_get_contents($path), $assoc);
    
    }

    public static function serialize(string $filename, mixed $value) : int
    {
        
        return file_put_contents($filename, json_encode($value));
    
    }

}