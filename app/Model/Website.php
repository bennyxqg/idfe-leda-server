<?php
App::uses('AppModel', 'Model');

/**
 * Website Model
 *
 */
class Website extends AppModel
{

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'website';
    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    /**
     *    获取站点内容列表
     *
     *
     * Enter description here ...
     * @param unknown_type $site_id
     */
    function get_website_list($site_id = null)
    {
        $conditions = array();
        $conditions ['conditions'] = array('id' => $site_id);
        $conditions ['conditions'] ['status'] = 1;
        $result = $this->find('all', $conditions);
        if (!empty ($result)) {
            $result = Set::classicExtract($result, '{n}.Website');
            return $result;
        }
        return false;
    }
    /**
     * 根据站点id 获取站点信息
     * Enter description here ...
     * @param unknown_type $server_name
     */
    function get_website_info($site_id = null)
    {
        $conditions = array();
        if (empty($site_id)) {
            return false;
        }
        $conditions ['conditions'] = array('id' => $site_id);
        $conditions ['conditions'] ['status'] = 1;
        $result = $this->find('all', $conditions);
        if (!empty ($result)) {
            $result = Set::classicExtract($result, "{n}.Website");
            return $result;
        }
        return false;
    }

    /**
     * 根据站点域名 获取站点信息
     * Enter description here ...
     * @param unknown_type $server_name
     */
    function get_website_info_by_name($name = null)
    {
        $conditions = array();
        if (empty($name)) {
            return false;
        }
        $conditions ['conditions'] = array('domain_name' => $name);
        $conditions ['conditions'] ['status'] = 1;
        $result = $this->find('first', $conditions);
       // print_r($result);
        if (!empty ($result)) {
            $result = $result["Website"];
            return $result;
        }
        return false;
    }


}
