<?

namespace Wails\Models;
use Wails\Core\Model;

final class ExampleModel extends Model
{

    public function create(array $args) : object { return new Model(); }

    public function retrieve(int $id) : object { return new Model(); }

    public function update(int $id) : bool { return false; }

    public function delete(int $id) : bool { return false; }

    public function getAll() : array { return []; }

    public function getAllBy(array $args) : array { return []; }

}