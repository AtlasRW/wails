<?

namespace Wails\Core;
use PDO;

abstract class Entity implements CRUDInterface, RepositoryInterface
{

    protected object $pdo;

    public function __construct()
    {

        $config = Config::get("database");
        $this->pdo = new PDO(
            "{$config->driver}:dbname={$config->name};host={$config->host}:{$config->port}",
            "{$config->user}", "{$config->pass}"
        );

    }

    public function create(array $args) : object { return new Entity(); }

    public function retrieve(int $id) : object { return new Entity(); }

    public function update(int $id) : bool { return false; }

    public function delete(int $id) : bool { return false; }

    public function getAll() : array { return []; }

    public function getAllBy(array $args) : array { return []; }

}