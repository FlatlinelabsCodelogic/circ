<?php


class FileOps{

    public $data;

        public $d;
        public $d1;
        public $rp;
        public $ret;
        public $k;
        public $v;
        public $brsplit;
        public $exsplit = array();
        public $trimmed = array();
        public $fileName;
        public $path;
        public $imageDir;
        public $url;
        public $uploadUrl;
        public $targetDir;

        public function __contruct(){

        }

        public function setUploadUrl(){
            $this->uploadUrl = 'files';
        }

        public function setTargetDir($targetDir){
            $this->targetDir = $targetDir;
        }

        public function getTargetDir(){
            return $this->targetDir;
        }

        public function getUploadUrl(){
            $this->setUploadUrl();
            return $this->uploadUrl;
        }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getImageDir()
    {
        return $this->imageDir;
    }

    /**
     * @param mixed $imageDir
     */
    public function setImageDir($imageDir)
    {
        $this->imageDir = $imageDir;
    }

    /**
     * @param $url
     */

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;

    }
    
        public function GetFileContents($data){
            $d =  file_get_contents("files/".$data["name"]);
            $brsplit = nl2br($d);
            $exsplit = explode("<br />", $brsplit);
            foreach($exsplit as $t){
                $trimmed[] = trim($t);
            }
            return $trimmed;
        }

        public function RecordParse($data){
            foreach($data as $k => $v){
                $ret = explode(",", $v);
                $r = $this->ColumnCount($ret);
            }
            return $ret;
        }

        public function ColumnCount($data){
            $d = count($data);
            echo "-----> ".$d;
            return $d;
        }

        public function TypeCheck($data){

        }
}