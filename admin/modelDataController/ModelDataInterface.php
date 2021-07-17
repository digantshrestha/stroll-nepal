<?php

namespace admin\modelDataController;

interface ModelDataInterface{

    public function add($arr);

    public function update($id, $arr);

    public function delete($id);
}