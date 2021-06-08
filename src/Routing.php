<?

namespace Wails\Core;

class Routing
{

    public function __construct()
    {

        $config = Utils::deserialize(__DIR__."/config/database.json");
        $this->pdo = new PDO(
            "{$config->driver}:dbname={$config->name};host={$config->host}:{$config->port}",
            "{$config->user}",
            "{$config->pass}"
        );

    }

}