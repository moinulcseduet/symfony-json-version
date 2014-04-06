<?php

namespace Asad\Core\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AppController
{
    protected $data = array();

    public function init()
    {
        parent::init();
        $this->response = new Response();
        $this->response->headers->set('Content-Type', 'application/json');
    }

    public function indexAction($name)
    {
        return $this->render('AsadCoreBundle:Default:index.html.twig', array('name' => $name));
    }

    public function phoneAction()
    {
        $this->data['lists'] = $this->get('phone_model')->phone_list();

        return $this->render('AsadCoreBundle:Default:phone-list.html.twig', $this->data);
    }

    public function phoneDetailsAction($id)
    {
        $this->data['phone'] = $this->get('phone_model')->phone_details($id);
        //echo '<pre>'; print_r($this->data['phone']); die;
        return $this->render('AsadCoreBundle:Default:phone-details.html.twig', $this->data);
    }

    public function phoneSearchAction()
    {
        $searchkey = strtolower($_POST['searchkey']);

        $lists = $this->get('phone_model')->phone_search();

        $retStr = '<ul class="phones">';

        foreach($lists as $val) {
            if (preg_match('/'.$searchkey.'/', strtolower($val['name'])) || preg_match('/'.$searchkey.'/', strtolower($val['snippet']))) {
                $retStr.='<li class="thumbnail phone-listing">
                    <a href="/phone-details/'.$val['id'].'" class="thumb"><img src="'.$val['imageUrl'].'"></a>
                    <a href="/phone-details/'.$val['id'].'">'.$val['name'].'</a>
                    <p>'.$val['snippet'].'</p>
                </li>';
            }
        }

        $retStr.='</ul>';

        $this->response->setStatusCode(200);
        $this->response->setContent(json_encode(array($retStr)));

        return $this->response;
    }

    public function phoneSortAction()
    {
        $searchkey = strtolower($_POST['searchkey']);
        $sortkey = strtolower($_POST['sortkey']);

        if (empty($searchkey)) {
            $lists = $this->get('phone_model')->phone_list();

        } else {
            $lists = $this->get('phone_model')->phone_search();
        }

        if ($sortkey == 'age') {
            $sort_list = $this->arrayMsort($lists, array('age'=>SORT_ASC));

        } elseif ($sortkey == '-age') {
            $sort_list = $this->arrayMsort($lists, array('age'=>SORT_DESC));

        } else {
            $sort_list = $this->arrayMsort($lists, array('name'=>SORT_ASC));
        }

        $retStr = '<ul class="phones">';

        foreach($sort_list as $val) {
            if (preg_match('/'.$searchkey.'/', strtolower($val['name'])) || preg_match('/'.$searchkey.'/', strtolower($val['snippet']))) {
                $retStr.='<li class="thumbnail phone-listing">
                    <a href="/phone-details/'.$val['id'].'" class="thumb"><img src="'.$val['imageUrl'].'"></a>
                    <a href="/phone-details/'.$val['id'].'">'.$val['name'].'</a>
                    <p>'.$val['snippet'].'</p>
                </li>';
            }
        }

        $retStr.='</ul>';

        $this->response->setStatusCode(200);
        $this->response->setContent(json_encode(array($retStr)));

        return $this->response;
    }

    private function arrayMsort($array, $cols)
    {
        $colarr = array();
        foreach ($cols as $col => $order) {
            $colarr[$col] = array();
            foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
        }
        $eval = 'array_multisort(';
        foreach ($cols as $col => $order) {
            $eval .= '$colarr[\''.$col.'\'],'.$order.',';
        }
        $eval = substr($eval,0,-1).');';
        eval($eval);
        $ret = array();
        foreach ($colarr as $col => $arr) {
            foreach ($arr as $k => $v) {
                $k = substr($k,1);
                if (!isset($ret[$k])) $ret[$k] = $array[$k];
                $ret[$k][$col] = $array[$k][$col];
            }
        }

        return $ret;
    }

}
