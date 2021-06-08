<?

namespace Wails\Core;
use PDO;

abstract class DAO implements CRUDInterface, RepositoryInterface
{

    protected $pdo;

    public function __construct()
    {

        $config = Config::get("database");
        $this->pdo = new PDO(
            "{$config->driver}:dbname={$config->name};host={$config->host}:{$config->port}",
            "{$config->user}",
            "{$config->pass}"
        );

    }

    public function create(array $args) : object {}

    public function retrieve(int $id) : object {}

    public function update(int $id) : bool {}

    public function delete(int $id) : bool {}

    public function getAll() : array {}

    public function getAllBy(array $args) : array {}

}