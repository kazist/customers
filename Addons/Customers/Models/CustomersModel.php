<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Customers\Addons\Customers\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\KazistFactory;
use Kazist\Service\Database\Query;

class CustomersModel {

    public function getInfo() {
        return 'Hello World!';
    }

    public function getCustomers() {

        $query = $this->getQuery();

        $records = $query->loadObjectList();

        return $records;
    }

    public function getQuery() {

        $factory = new KazistFactory;

        $query = $factory->getQueryBuilder('#__customers_customers', 'cc');
        $query->where('cc.published=1');
        $query->orderBy('cc.id', 'DESC');

        return $query;
    }

}
