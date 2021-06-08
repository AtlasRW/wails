<?

namespace Wails\Core;
use Wails\Core\Interfaces\CRUDInterface;
use Wails\Core\Interfaces\RepositoryInterface;
use PDO;

abstract class DAO implements CRUDInterface, RepositoryInterface
{

    protected $pdo;

    public function __construct()
    {

        $config = $this->config();
        $this->pdo = new PDO(
            "{$config->driver}:dbname={$config->name};host={$config->host}:{$config->port}",
            "{$config->user}",
            "{$config->pass}"
        );

    }

    private function config() : object
    {
        
        return json_decode(file_get_contents(__DIR__."/config/database.json"));
    
    }

    public function create(array $args) : object {}

    public function retrieve(int $id) : object {}

    public function update(int $id) : bool {}

    public function delete(int $id) : bool {}

    public function getAll() : array {}

    public function getAllBy(array $args) : array {}

}