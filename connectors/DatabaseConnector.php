<?php
/**
 * ���ݿ���������ʹ��yii�ģ�
 * User: shmilyzxt 49783121@qq.com
 * Date: 2016/11/25
 * Time: 17:35
 */

namespace shmilyzxt\queue\connectors;


use yii\base\Component;

class DatabaseConnector extends Component
{

    public function  init()
    {
        parent::init();
        throw new \Exception('you should use yii\db\Connection as the database connector!');
    }
}