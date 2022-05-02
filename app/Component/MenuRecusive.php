<?php

namespace App\Component;

use App\Menu;

class MenuRecusive
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }
    public function MenuRecusiveAdd($parent_id = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $value) {
            $this->html .= '<option value="' . $value['id'] . '">' . $subMark . $value['name'] . '</option>';
            $this->MenuRecusiveAdd($value['id'], $subMark . '---');
        }
        return $this->html;
    }
    public function MenuRecusiveEdit($idp, $parent_id = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $value) {
            if ($idp == $value['id']) {
                $this->html .= '<option selected value="' . $value['id'] . '">' . $subMark . $value['name'] . '</option>';
            } else {
                $this->html .= '<option value="' . $value['id'] . '">' . $subMark . $value['name'] . '</option>';
            }
            $this->MenuRecusiveEdit($idp, $value['id'], $subMark . '---');
        }
        return $this->html;
    }
}
