<?php
/**
 *  @generated
 */
namespace cassandra;
class Cassandra_get_result extends \TBase {
  static $_TSPEC;

  public $success = null;
  public $ire = null;
  public $nfe = null;
  public $ue = null;
  public $te = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => \TType::STRUCT,
          'class' => '\cassandra\ColumnOrSuperColumn',
          ),
        1 => array(
          'var' => 'ire',
          'type' => \TType::STRUCT,
          'class' => '\cassandra\InvalidRequestException',
          ),
        2 => array(
          'var' => 'nfe',
          'type' => \TType::STRUCT,
          'class' => '\cassandra\NotFoundException',
          ),
        3 => array(
          'var' => 'ue',
          'type' => \TType::STRUCT,
          'class' => '\cassandra\UnavailableException',
          ),
        4 => array(
          'var' => 'te',
          'type' => \TType::STRUCT,
          'class' => '\cassandra\TimedOutException',
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'Cassandra_get_result';
  }

  public function read($input)
  {
    return $this->_read('Cassandra_get_result', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('Cassandra_get_result', self::$_TSPEC, $output);
  }
}


?>
