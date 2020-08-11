<?php

class ImageComponent extends Component
{


    function startup(Controller $controller)
    {
        $this->controller = $controller;
    }
    
	/**
	 * 上传处理方法
	 * @param string $targetFolder 保存目录
	 * @return string
	 */
	function uploadify($field,$path){
		$targetFolder = WWW_ROOT . 'uploads' . DS . $path;
		//print_r($_FILES[$field]);
		if ($_FILES[$field]['size'] == 0) return '';
		//if ($_FILES[$field]['size'] > 1024000) return 1;
		
		
		//判断大小
// 		if ($limit['size'] * 1024 < $file['size']) {
// 			$this->error('附檔容量超過限制（必須小於 ' . $limit['size'] . ' K），請重新上傳。', true);
// 		}
		
		if ($_FILES[$field]['size']) {
			$tempFile = $_FILES[$field]['tmp_name'];
			$fileParts = pathinfo($_FILES[$field]['name']);
			//格式
			$extension = $fileParts['extension'];
			//保存的文件名
			$save_name = time() .rand(1000,9999).'.' . $extension;
			//$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetFile = rtrim($targetFolder,'/') . '/' . $save_name;
			// Validate the file type
			$fileTypes = array('png','PNG','jpg','JPG'); // File extensions
			if (in_array($fileParts['extension'],$fileTypes)) {
				//var_dump($tempFile,$targetFile);
				if(move_uploaded_file($tempFile,$targetFile)){
					return array('pic' => $save_name,'size' => $_FILES[$field]['size'],'name' => $_FILES[$field]['name']);
					//echo base_url().'../upload/images/'.$save_name;
				}else{
					return '';
				}
			} else {
				return '';
			}
		} else {
			return '';
		}
	}

    /**
     *
     * 上传文件到指定的目录
     * 此类只使用与cakephp
     *
     * @param $model
     * @param $field
     * @param $target_directory
     * @param null $limit
     *
     *
     */
    function upload($model, $field, $target_directory, $limit = null)
    {
    	//print_r($_FILES);
		//print_r($this->controller);
        if (isset($this->controller->data[$model][$field])) {
            $data = & $this->controller->request->data;
            $file =& $this->controller->request->data[$model][$field];
            if (!empty($file['tmp_name']) && is_uploaded_file($file['tmp_name'])) {
                $path = WWW_ROOT . 'uploads' . DS . $target_directory;
                if (!empty($limit)) {
                    // check file extension
                    if (!empty($limit['extension'])) {
                        if (is_array($limit['extension'])) {
                            foreach ($limit['extension'] as $ext) {
                                if (!in_array($this->getFileExtension($file['name']), $limit['extension'])) {
                                    $this->error('不允許的檔案格式，副檔名必須為 ' . join('、', $limit['extension']) . ' 其中之一', true);
                                }
                            }
                        } else {
                            if ($this->getFileExtension($file['name']) != $limit['extension']) {
                                $this->error('不允許的檔案格式，副檔名必須為 ' . $limit['extension'], true);
                            }
                        }
                    }
                    // check file length
                    if (!empty($limit['size'])) {
                        if ($limit['size'] * 1024 < $file['size']) {
                            $this->error('附檔容量超過限制（必須小於 ' . $limit['size'] . ' K），請重新上傳。', true);
                        }
                    }
                    // check image size
                    if (!empty($limit['width']) || !empty($limit['height'])) {
                        list($width, $height) = getimagesize($file['tmp_name']);
                        if (!empty($limit['width'])) {
                            if ($width != $limit['width']) {
                                $this->error("圖片寬度不符合規定（必須為 {$limit['width']} 像素），請重新上傳", true);
                            }
                        }
                        if (!empty($limit['height'])) {
                            if ($height != $limit['height']) {
                                $this->error("圖片高度不符合規定（必須為 {$limit['height']} 像素），請重新上傳", true);
                            }
                        }
                    }
                }
                // make directories recursively if the specific directory is not exist
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
                // replace original filename with random string
                $filename = $this->generateFilename($this->getFileExtension($file['name']), $path);
                // move temporary file to its directory
                if (!move_uploaded_file($file['tmp_name'], $path . DS . $filename)) {
                    $this->error('上傳檔案失敗 - 無法移動暫存檔', true);
                }
                //file 重新赋值
                $file = $target_directory . '/' . $filename;
                return $file;

            } else {
                //如果不上传并且选中了单选按钮 删除这个图片
                if (isset($data[$field . '_check']) && (int)$data[$field . '_check'] == 1) {
                    $this->rmfile($data[$field]);
                    //把相应的字段设置为空
                    $data[$model][$field] = "";

                } else {
                    //否则不修改 把它从数组中去掉 不做编辑 编辑中列表不存在
                    unset($data[$model][$field]);
                }
            }
        }
    }

    /**
     * 获取文件扩展名
     * @param $filename
     * @return bool|string
     *
     */
    protected function getFileExtension($filename)
    {

        $arr = split('\.', $filename);
        return is_array($arr) ? strtolower($arr[count($arr) - 1]) : false;
    }

    /**
     * 删除文件
     * @param $filename
     * @param bool $dorm
     * @return bool
     *
     */
    protected function rmfile($filename, $dorm = true)
    {
        if ($dorm) {
            $file = WWW_ROOT . 'uploads' . DS . $filename;
            if (is_file($file) && is_writeable($file)) {
                return unlink($file);
            }
        }
    }


    /**
     * 显示错误信息
     * @param $str
     * @param bool $isFatal
     * @param string $action
     * @return mixed
     *
     */
    protected function error($str, $isFatal = false, $action = 'index')
    {
        $this->error = true;
        if ($isFatal) {
            $this->Session->setFlash(date('Y-m-d H:i:s ') . $str, 'flash');
            $this->redirect(array('action' => $action));
        }
        return $this->Session->setFlash(date('Y-m-d H:i:s ') . $str, 'default', array(), 'flash');
    }

    /**
     * 生成文件扩展名 判断之前没有存在 如果存在继续生成
     * @param $extension
     * @param $path
     * @return string
     *
     */

    protected function generateFilename($extension, $path)
    {
        $filename = date('YmdHis') . '_' . substr(md5(time() . microtime()), 0, 5) . '.' . $extension;
        return is_file($path . DS . $filename) ? $this->generateFilename($extension, $path) : $filename;
    }

}