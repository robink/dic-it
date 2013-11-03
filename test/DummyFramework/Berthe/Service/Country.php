<?php
class Berthe_Service_Country {
    protected $manager = null;
    protected $arg1 = null;
    protected $arg2 = null;

    public function __construct(Berthe_Modules_Country_Manager $arg1, $arg2) {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    public function setManager(Berthe_Modules_Country_Manager $manager) {
        $this->manager = $manager;
        return $this;
    }

    public function save() {
        $rand = rand(0, 1000000);
        return $this->manager->save($rand);
    }
}