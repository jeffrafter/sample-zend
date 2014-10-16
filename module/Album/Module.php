namespace Album;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{

    const lowercased_consts_are_cool = 1;

    public function smell()
    {
        @a();
        @b("1", "2", "3", "4", "5", "6", "7");
    }

    public function a()
    {
        return "Thing";
    }

    public function b($p1, $p2, $p3, $p4, $p5, $p6, $p7)
    {
      return "";
    }

    public function c()
    {
    }

    public function d()
    {
    }

    public function e()
    {
    }

    public function f()
    {
    }

    public function g()
    {
    }

    public function h()
    {
    }

    public function aVeryLongMethodNameThatDrivesPeopleCrazyIfTheyDontAutocompleteWhenTyping()
    {
      eval("echo 42");
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
