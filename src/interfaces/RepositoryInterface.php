<?

namespace Wails\Core\Interfaces;

interface RepositoryInterface
{

    public function getAll() : array;

    public function getAllBy(array $args) : array;

}