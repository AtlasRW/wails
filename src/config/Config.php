<?

namespace Wails\Core;

class Config
{

    public static function get(string $filename, bool $assoc = false) : mixed
    {
        
        return Utils::unserialize(__DIR__."/${filename}.json", $assoc);
    
    }

}