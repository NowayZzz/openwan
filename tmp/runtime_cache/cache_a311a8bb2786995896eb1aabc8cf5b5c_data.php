<?php return array (
  'expired' => 1358482756,
  'data' => 
  array (
    0 => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'scale' => NULL,
        'type' => 'int',
        'length' => '11',
        'ptype' => 'autoincr',
        'not_null' => true,
        'pk' => true,
        'auto_incr' => true,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '编号',
      ),
      'namespace' => 
      array (
        'name' => 'namespace',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '64',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => 'default',
        'has_default' => true,
        'desc' => '命名空间',
      ),
      'controller' => 
      array (
        'name' => 'controller',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '64',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => 'default',
        'has_default' => true,
        'desc' => '控制器',
      ),
      'action' => 
      array (
        'name' => 'action',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '64',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => 'index',
        'has_default' => true,
        'desc' => '操作',
      ),
      'aliasname' => 
      array (
        'name' => 'aliasname',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '64',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => '',
        'has_default' => true,
        'desc' => '注释名',
      ),
      'rbac' => 
      array (
        'name' => 'rbac',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '32',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => 'ALC_NULL',
        'has_default' => true,
        'desc' => '系统角色',
      ),
    ),
    1 => 
    array (
      'id' => true,
      'namespace' => true,
      'controller' => true,
      'action' => true,
      'aliasname' => true,
      'rbac' => true,
    ),
  ),
);