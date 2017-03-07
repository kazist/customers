<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of ProjectsController
 *
 * @author sbc
 */

namespace Customers\Projects\Code\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;

class ProjectsController extends BaseController {

    public function detailAction($id = '') {

        $item = $this->model->getRecord();

        $data_arr['item'] = $item;

        $this->container->get('document')->title = $item->title;
        $this->container->get('document')->description =  substr(strip_tags($item->description));
        $this->container->get('document')->image = WEB_ROOT . $item->image_file;
        $this->container->get('document')->type = 'article';

        $this->html = $this->render('Customers:Projects:Code:views:detail.index.twig', $data_arr);

        $response = $this->response($this->html);

        return $response;
    }

}
