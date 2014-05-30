<?php
class Awesome {
    protected $_data = [];

    public function __call($name, $val) {
        if(substr($name, 0, 3) == "set") {
            $this->_data[strtolower(substr($name, 3))] = $val[0];

            return $this;
        } else if(substr($name, 0, 3) == "get") { 
            return $this->_data[strtolower(substr($name, 3))];
        }
    }
}

$awesome = new Awesome();
echo $awesome->setName("awsesomw")->setAge(10)->getName();
?>