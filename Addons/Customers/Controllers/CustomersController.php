<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Customers\Addons\Customers\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\AddonController;
use Customers\Addons\Customers\Models\CustomersModel;

/**
 * Kazist view class for the application
 *
 * @since  1.0
 */
class CustomersController extends AddonController {

    function indexAction($offset = 0, $limit = 6) {

        $model = new CustomersModel;

        $customers = $model->getCustomers();

        $data_arr['customers'] = $customers;

        $this->html = $this->render('Customers:Addons:Customers:views:customers.twig', $data_arr);

        $response = $this->response($this->html);



        return $response;
    }

}
