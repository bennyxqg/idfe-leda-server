<?php
App::uses('AppController', 'Controller');

/**
 * CodeDetails Controller
 *
 * @property CodeDetail $CodeDetail
 */
class CodeDetailsController extends AppController
{

    var $uses = array("CodeDetail", "Code");

    function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'admin_default';
        $title_for_layout = '发号详情管理';
        $this->set('title_for_layout', $title_for_layout);

    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $this->CodeDetail->recursive = 0;
        $where = "";
        if ($this->site_list != "all") {
            $site_list = $this->site_list;
            if (is_array($this->site_list)) {
                $site_list = implode(",", $site_list);
                $where = "where site_id in ($site_list)";
            } else {
                $where = "where site_id= $site_list";
            }
        }
        $sql = "SELECT COUNT(*) as count ,site_id,code_id,status FROM code_detail $where GROUP BY site_id ,code_id,status";
        $result = $this->CodeDetail->query($sql);
        $code_count_list = array();
        foreach ($result as $key => $value) {
            $code_count_list[$value["code_detail"]["site_id"] . "_" . $value["code_detail"]["code_id"] . "_" . $value["code_detail"]["status"]] = $value[0]["count"];
        }
        $code_list = $this->Code->getAllInfo($this->site_list);
        $code_list = Set::classicExtract($code_list, "{n}.Code");
        $this->set("code_count_list", $code_count_list);
        $this->set('result', $code_list);

    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        $code_list = $this->Code->getList($this->site_list);
        $this->set('code_list', $code_list);
        if ($this->request->is('post')) {
            $site_id = $this->request->data[$this->modelClass]['site_id'];
            $result = $this->CodeDetail->SaveCode($this->request->data[$this->modelClass]["code"], $site_id, $this->request->data[$this->modelClass]["code_id"]);
            if ($result["ret"] == 0) {
                $this->redirect_js($result["msg"], "/admin/CodeDetails/index");
            } else {
                $this->redirect_js($result["msg"], "/admin/CodeDetails/index");
            }
        }
    }


}
