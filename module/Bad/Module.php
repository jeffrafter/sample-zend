<?php
namespace Bad;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

// Lowercased constant
define('small_value', '0.0');

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{

    // Lowercased constant
    const lowercased_consts_are_cool = 1;

    protected $thisIsAVeryLongVarNameInAClass = 1;

    public function smell()
    {
        // Error suppress
        @a();
        @highParams("1", "2", "3", "4", "5", "6", "7");
    }

    // Short method name
    public function a()
    {
        return "Thing";
    }

    // High number of params
    public function highParams($p1, $p2, $p3, $p4, $p5, $p6, $p7)
    {
        return "";
    }

    public function superGlobal()
    {
        // Accessing _REQUEST
        $val = $_REQUEST["request_key"];

        // Accessing HTTP_RAW_POST_DATA
        $val = $HTTP_RAW_POST_DATA["raw=1&bad=2"];

        // Accessing HTTP_RAW_POST_DATA from the _SERVER superglobal
        $raw = $_SERVER["HTTP_RAW_POST_DATA"];

        // Super global
        return $_SERVER["get_a_super_global"];
    }

    // Not checked
    function defaultVisibility()
    {
    }

    public function aVeryLongMethodNameThatDrivesPeopleCrazyIfTheyDontAutocompleteWhenTyping()
    {
        return "";
    }

    public function displayErrorsUse()
    {
        error_reporting();

        ini_set('display_errors', 1);
    }

    public function configChange()
    {
        assert_options();

        gc_collect_cycles();

        gc_disable();

        gc_enable();

        ini_alter();

        ini_restore();

        ini_set();

        magic_quotes_runtime();

        restore_include_path();

        set_include_path();

        set_magic_quotes_runtime();

        set_time_limit();
    }

    public function cyclomatic($a, $b)
    {
      if ((($a == $b) || ($a && $b) || ($a || $b)) and $b) {
          // ???
      } elseif ($a - $b == 0) {
          echo(-1);
      }

      if (true == $a) {
        echo("Use ====");
      }

      for ($i = 0; $i < 10; $i++) {
          while ($j === true) {
              if ($j == $i || $i == 11) {
                  echo($j);
          } else {
              switch($i) {
                  case 1:
                      break;
                  case 2:
                      break;
                  default:
                      echo(42);
            }
          }
        }
      }
    }

    public function parseSome()
    {
        $arr;

        parse_str("this=99&that=100");

        parse_str("this=99&that=100", $arr);

        mb_parse_str("this=99&that=100");

        mb_parse_str("this=99&that=100", $arr);
    }

    public function info($value)
    {
        debug_backtrace();

        var_dump($value);

        print_r($value);

        phpinfo();

        debug_zval_dump();

        var_export();
    }

    public function bad()
    {
        $thisIsAVeryLongVarNameInAFunction = 1;

        $i = "So short, not in a loop";

        eval("echo 42");

        echo(file_get_contents($foo));

        system("ls", $ret);

        passthru("cat /etc/passwd", $err);
    }

    public function sleepy()
    {
        sleep(1);

        usleep(1);

        time_sleep_until(10, 1);

        time_nanosleep(1);
    }

    public function bali($check)
    {
        // BAIL OUT
        assert($check, ASSERT_BAIL);

        // RUN AWAY
        exit();

        // REALLY GET OUT
        die();
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

class SecondClass implements AutoloaderProviderInterface, ConfigProviderInterface
{
}

// Closing tag
?>

