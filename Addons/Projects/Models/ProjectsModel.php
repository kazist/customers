<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Customers\Addons\Projects\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\KazistFactory;
use Kazist\Service\Database\Query;
use Kazist\Model\BaseModel;

class ProjectsModel extends BaseModel {

    public $block_id = '';

    public function getInfo() {
        return 'Hello World!';
    }

    public function getProjects() {

        $factory = new KazistFactory;

        $query = $factory->getQueryBuilder('#__customers_projects', 'cp');
       // $query->where('closed=0 OR closed IS NULL');
        
        $records = $query->loadObjectList();

        return $records;
    }

}
