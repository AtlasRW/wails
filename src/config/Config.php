<?

namespace Wails\Core;

class Config
{

    public static function get(string $filename) : mixed
    {
        
        return Utils::unserialize(__DIR__."/${filename}.json");
    
    }

    public static function set(string $filename, mixed $value) : int
    {
    
        return Utils::serialize(__DIR__."/${filename}.json", $value);
    
    }


}