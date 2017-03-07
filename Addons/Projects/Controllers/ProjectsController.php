<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Customers\Addons\Projects\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\AddonController;
use Customers\Addons\Projects\Models\ProjectsModel;

/**
 * Kazist view class for the application
 *
 * @since  1.0
 */
class ProjectsController extends AddonController {

    public $flexview_id = '';

    function indexAction() {

        $this->model = new ProjectsModel;

        $projects = $this->model->getProjects();

        $data_arr['projects'] = $projects;

        $this->html = $this->render('Customers:Addons:Projects:views:projects.twig', $data_arr);

        $response = $this->response($this->html);



        return $response;
    }

}
